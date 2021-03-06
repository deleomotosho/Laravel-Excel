# Creating a sheet from an array

To create a new file from an array use `->fromArray()` inside the sheet closure.

    Excel::create('Filename', function($excel) {

        $excel->sheet('Sheetname', function($sheet) {

            $sheet->fromArray(array(
                array('data1', 'data2'),
                array('data3', 'data4')
            ));

        });

    })->export('xls');

Alternatively you can use `->with()`.

    $sheet->with(array(
        array('data1', 'data2'),
        array('data3', 'data4')
    ));

If you want to pass variables inside the closure, use `use($data)`

    $data = array(
        array('data1', 'data2'),
        array('data3', 'data4')
    );

    Excel::create('Filename', function($excel) use($data) {

        $excel->sheet('Sheetname', function($sheet) use($data) {

            $sheet->fromArray($data);

        });

    })->export('xls');