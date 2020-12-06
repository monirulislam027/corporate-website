<?php


namespace App\Classes;


class Option extends Config
{
    public function option_update($value, $id)
    {
        return $this->conn->query("UPDATE `options` SET `value` = '$value' WHERE `id` = '$id'");
    }

    public function all_options()
    {
        $obj = $this->conn->query("SELECT * FROM `options`");
        $options = [];

        while ($option = $obj->fetch_assoc()) {
            $options[$option['name']] = ['value' => $option['value'], 'id' => $option['id']];

        }
        return $options;
    }


    public function site_name()
    {
        return $this->all_options()['site_name'];
    }

    public function registration()
    {
        return $this->all_options()['registration'];
    }

    public function forgot_password()
    {
        return $this->all_options()['forgot_password'];
    }

    public function google_map()
    {
        return $this->all_options()['google_map'];
    }

    public function contact_form()
    {
        return $this->all_options()['contact_form'];
    }

    public function contact_location()
    {
        return $this->all_options()['contact_location'];
    }

    public function contact_email()
    {
        return $this->all_options()['contact_email'];
    }

    public function contact_call()
    {
        return $this->all_options()['contact_call'];
    }

    public function twitter()
    {
        return $this->all_options()['twitter'];
    }

    public function linkedIn()
    {
        return $this->all_options()['linkedIn'];
    }

    public function facebook()
    {
        return $this->all_options()['facebook'];
    }

    public function instagram()
    {
        return $this->all_options()['instagram'];
    }

    public function skypee()
    {
        return $this->all_options()['skypee'];
    }

    public function google_map_url()
    {
        return $this->all_options()['google_map_url'];
    }


}