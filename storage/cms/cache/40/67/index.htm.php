<?php 
class Cms589b2f45e12a1874950426_791061934Class extends \Cms\Classes\PageCode
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
