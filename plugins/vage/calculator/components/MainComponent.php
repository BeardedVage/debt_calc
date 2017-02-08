<?php namespace Vage\Calculator\Components;
use Carbon\Carbon;
use Cms\Classes\ComponentBase;
use Vage\Calculator\Models\Debt;

class MainComponent extends ComponentBase
{
    public $salary = 900;

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

    public function onNewPayment()
    {
        //Получаем новый платёж
        $newPayment = intval($_POST['payment']);

        //Проверям в БД наличие прошломесяцчной ЗП
        $lastMonth = Debt::orderBy('id', 'desc')->first();
        if (Carbon::now()->format('M') != $lastMonth['month']) {
            Debt::create([
                'debt' => $this->salary,
                'salary' => $this->salary,
                'status' => 0,
                'month' => Carbon::now()->format('M')
            ]);
        };

        //Получаем массив из месецов и долгам по месяцам
        $arrDebt = Debt::where('debt', '>', 0)->select('id', 'month' ,'debt')->get()->toArray();

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
