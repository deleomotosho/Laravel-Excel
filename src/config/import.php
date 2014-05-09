<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Has heading
    |--------------------------------------------------------------------------
    |
    | The sheet has a heading row which we can use as attribute names
    |
    */

    'heading'   => true,

    /*
    |--------------------------------------------------------------------------
    | Cell name word seperator
    |--------------------------------------------------------------------------
    |
    | The default seperator which is used for the cell names
    |
    */

    'seperator' => '_',

    /*
    |--------------------------------------------------------------------------
    | Input encoding
    |--------------------------------------------------------------------------
    */
    'encoding'  => 'UTF-8',

    /*
    |--------------------------------------------------------------------------
    | Delimiter
    |--------------------------------------------------------------------------
    |
    | The default delimiter which will be used to read out a CSV file
    | If you would like to use an other delimiter only one time,
    | you can also use the `setDelimiter()` chain.
    |
    */

    'delimiter' => ',',

    /*
    |--------------------------------------------------------------------------
    | Calculate
    |--------------------------------------------------------------------------
    |
    | By default cells with formulas will be calculated.
    |
    */

    'calculate' => true,

     /*
    |--------------------------------------------------------------------------
    | Ignore empty cells
    |--------------------------------------------------------------------------
    |
    | By default empty cells are not ignored
    |
    */

    'ignoreEmpty' => false,

    /*
    |--------------------------------------------------------------------------
    | Date format
    |--------------------------------------------------------------------------
    |
    | The format dates will be parsed to
    |
    */

    'dates' => array(

        /*
        |--------------------------------------------------------------------------
        | Enable/disable date formatting
        |--------------------------------------------------------------------------
        */
        'enabled'   => true,

        /*
        |--------------------------------------------------------------------------
        | Default date format
        |--------------------------------------------------------------------------
        |
        | If set to false, a carbon object will return
        |
        */
        'format'    => false,

        /*
        |--------------------------------------------------------------------------
        | Date columns
        |--------------------------------------------------------------------------
        */
        'columns'   => array()
    ),

    /*
    |--------------------------------------------------------------------------
    | Import sheets by config
    |--------------------------------------------------------------------------
    */
    'sheets'    => array(

        /*
        |--------------------------------------------------------------------------
        | Example sheet
        |--------------------------------------------------------------------------
        |
        | Example sheet "test" will grab the firstname at cell A2
        |
        */

        'test'       =>  array(

            'firstname' => 'A2'

        )

    )

);