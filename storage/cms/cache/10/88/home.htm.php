<?php 
class Cms589882c9a775c036396316_2394945737Class extends \Cms\Classes\PageCode
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
