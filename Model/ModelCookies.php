
<?php
    function log_in_Cookies( $name, $data )
    {
        setcookie( $name, $data, time() + 3600 * 24 * 30 );
    }

    function log_out_Cookies( $name )
    {
        setcookie( $name, '', time() + 3600 * 24 * 30 );
    }

    function get_data_Cookies( $name )
    {
        if ( ! empty ( $_COOKIE[ $name ] ) )
            return $_COOKIE[ $name ];

        return '';
    }
?>

