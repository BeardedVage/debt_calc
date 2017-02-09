<?php 
class Cms589b2eadeb2b0802727260_1297229759Class extends \Cms\Classes\PageCode
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
