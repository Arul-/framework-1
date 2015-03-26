<?php

class Users {

    /**
     * @access protected
     * @class AccessControl {@requires user}
     */
    function index()
    {
        return User::all();
    }

    /**
     * @param int $id
     *
     * @return array
     */
    function get($id)
    {
        return User::find($id);
    }

    /**
     * @status 201
     *
     * @param string $name  {@from body}
     * @param string $email {@type email} {@from body}
     *
     * @return mixed
     */
    function post($name, $email)
    {
        return 'adding new record . ' . $name . ' - ' . $email ;
    }

    /**
     * @param int    $id
     * @param string $name  {@from body}
     * @param string $email {@type email} {@from body}
     *
     * @return mixed
     */
    function put($id, $name, $email)
    {
        return 'update record . ' . $id . $name . ' - ' . $email ;
    }

    /**
     * @param int $id
     *
     * @return array
     */
    function delete($id)
    {
        return 'deleting record . ' . $id ;
    }
}