<?php

namespace Redfox80\Twitch;

use Redfox80\Twitch\Request;

class Endpoints extends Request {


    public function getStream($login=null,$id=null)
    {
        $query = $login ? 'user_login=' . $login : 'user_id=' . $id;

        if($query == "")
        {
            return 1;
        }

        return $this->send('streams?' . $query);
    }
}