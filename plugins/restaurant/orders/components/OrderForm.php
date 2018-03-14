<?php namespace Restaurant\Orders\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use ValidationException;
use Restaurant\Orders\Models\Order;
use Flash;
use RainLab\User\Models\User;
use Restaurant\Meals\Models\Meal;

class OrderForm extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'Order Form',
            'description' => 'Enter Orders'
        ];
    }


    public function buildOrderEmail($user, $order)
    {
        $huiseNumber = $user['house_number'] . $user['addition'];
        $vars = [
            'name' => $user['name'],
            'email' => $user['email'],
            'description' => $order['description'],
            'orders_description' => $order['orders_description'],
            'total' => $order['total'],
            'created_at' => $order['created_at'],
            'street_name' => $user['street_name'],
            'house_number' => $huiseNumber,
            'postcode' => $user['postcode'],
            'city' => $user['city']
        ];
        return $vars;
    }

    public function sendOrderEmail($user, $order)
    {
        $content = $this->buildOrderEmail($user, $order);

        Mail::send('restaurant.contact::mail.message', $content, function ($message) {
            $message->to('amer9113@gmail.com', 'Admin Person');
            $message->subject('New Order');

        });
    }

    public function onSave()
    {
        $user = User::where('email', Input::get('email'))->first();
        if (!$user) {
            Flash::success('Some thing Wrong Please call us');
            return Redirect::back();
        }
        $order = new Order();
        $order->email = Input::get('email');
        $orders = explode("&&&", Input::get('ordersDescription'));
        $ids = explode(",", Input::get('ordersIds'));

        $meal = new Meal();
        $total = 0;
        $ordertext = '';
        foreach ($orders as $orderInfo) {
            if (!empty($orderInfo)) {
                $orderDescription = explode(",", $orderInfo);
                $queryMeal = Meal::where('id', $orderDescription[0])->first();
                $total = $total + ($queryMeal['price'] * $orderDescription[1]);
                $end=!empty($orderDescription[2])?'(' . $orderDescription[2].')':'';
                $ordertext .= $queryMeal['name_ar'] . ':'. $orderDescription[1]. $end.',';

            }
        }

        $order->orders_description = $ordertext;
        $order->description = Input::get('description');
        $order->total = $total;
        $order->save();
        $this->sendOrderEmail($user, $order);
        if(Input::get('lang')=='ar'){
            $text='في الطريق......' . $user['name'] . ',سوف نتصل بك لتاكيد الطلب ';
        }else{
            $text='Onderweg......' . $user['name'] . ',We zullen contact met u opnemen om uw bestelling te bevestigen ';
        }
        Flash::success($text);
        return Redirect::back();
    }


}