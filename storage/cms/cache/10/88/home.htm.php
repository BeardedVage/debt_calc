<?php 
class Cms589b24ca76bc2228735950_308125186Class extends \Cms\Classes\PageCode
{
public function onSubmit()
{
    $data = post();

    $rules = [
        'payment' => 'required|numeric',
    ];

    $validation = Validator::make($data, $rules);

    if ($validation->fails()) {
        throw new ValidationException($validation);
    }

    Flash::success('Jobs done!');
}
}
