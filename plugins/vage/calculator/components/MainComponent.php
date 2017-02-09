<?php namespace Vage\Calculator\Components;
use Carbon\Carbon;
use Cms\Classes\ComponentBase;
use RainLab\User\Facades\Auth;
use RainLab\User\Models\User;
use Vage\Calculator\Models\Debt;
use Vage\Calculator\Models\Payments;

class MainComponent extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'MainComponent Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onUpdateSalary()
    {
        $user = Auth::getUser();
        $newSalary = intval($_POST['salary']);

        User::where('id', '=', $user->id)
            ->update(['surname' => $newSalary]);
    }

    public function onNewDebt()
    {
        $user = Auth::getUser();

        $newDebt = intval($_POST['debt']);
            Debt::create([
                'debt' => $newDebt,
                'salary' => $user->surname,
                'month' => 'Aditional debt',
                'uid' => $user->id,
            ]);
    }

    public function onNewPayment()
    {
        //Получаем пользователя
        $user = Auth::getUser();

        //Получаем новый платёж
        $newPayment = intval($_POST['payment']);
            Payments::create([
                'sum' => $newPayment,
                'uid' => $user->id,
                'added_at' => Carbon::today()->format('d.m.y'),
        ]);

        //Проверям в БД наличие прошломесяцчной ЗП
        $lastMonth = Debt::orderBy('id', 'desc')
            ->where('uid', '=', $user->id)
            ->first();

        if (Carbon::now()->format('M') != $lastMonth['month']) {
            Debt::create([
                'debt' => $user->surname,
                'salary' => $user->surname,
                'month' => Carbon::now()->format('M'),
                'uid' => $user->id,
            ]);
        };


        //Получаем массив из месецов и долгам по месяцам
        $arrDebt = Debt::where('debt', '>', 0)
            ->where('uid', '=', $user->id)
            ->select('id', 'month' ,'debt')
            ->get()
            ->toArray();

        //Расчёт остатка от платежа или долга
        foreach ($arrDebt as &$month_debt)
        if ($newPayment != 0) {
            //если платёж меньше чем задеолженность по первому месяцу
            if ($newPayment < $month_debt['debt']) {
                    //отнимаем от задолженности платеж
                    $month_debt['debt'] = intval($month_debt['debt']) - $newPayment;
                    $newPayment = 0;
                    Debt::where('id', '=', $month_debt['id'])
                        ->update(['debt' => $month_debt['debt']]);
                } else {
                    $new_payment = $newPayment - intval($month_debt['debt']);
                    $month_debt['debt'] = 0;
                    Debt::where('id', '=', $month_debt['id'])
                        ->update(['debt' => 0]);
                }
        }

    }
}
