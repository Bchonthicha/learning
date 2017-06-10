<html>
<head>
    <script src ="jquery-3.2.1.js"> </script>
</head>

<body>
    <script>
 /////////////// in javascript ///////////////

//data seriacation and de-seriacation
    //-แปลง ob เป็น string แล้วแปลงstring เป็นobj
//1 seriacation
        var obj8 ={"user":"A","talk":function(){console.log("Hello");}};
        var obj9 ={"name ":"AAA","age":"20","tickets":["QR","St","RS"]};  
        console.log(obj8);

        var str1= JSON.stringify(obj8);
        console.log(str1);

        console.log(obj9);
        var str2=JSON.stringify(obj9);
        console.log(JSON.stringify(obj9));

//2 de-seriacation
        var r01=JSON.parse(str1);
        console.log(r01);

        var r02=JSON.parse(str2);
        console.log(r02);
    </script>

    <?php 
        echo date('l, F jS, Y'); 

/////////////// in php ///////////////
$test =10;
echo "**************";
echo $test ;
$phpp =json_encode($test);
var_dump($phpp);
$JSONN=json_decode($phpp);
var_dump($JSONN);
echo "**************";
//--------------------------------------------------Convert JSON String to PHP Array
        $json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

        var_dump(json_decode($json));
        var_dump(json_decode($json, true));
echo "**************";
//var_dump : เป็นฟังก์ชันสำหรับ printข้อมูลของตัวแปรออกมา โดยแสดงชนิดของตัวแปรและค่าของตัวแปร 
        echo "<br> <br> <b>1.1) Convert PHP Array to JSON String </b><br>";
        $json1 = '["apple","orange","banana","strawberry"]';
        $array = json_decode($json1,true);
        print_r($array);  //เป็นคำสั่งที่ใช้แสดงค่าใน Array ออกมาทั้งหมด
        var_dump($array); 

//--------------------------------------------------Convert PHP Array to JSON String
        echo "<br><br> <b>1.2) Convert PHP Array to JSON String</b> <br>";
        $json2= json_encode($array);
        echo $json2;

//--------------------------------------------------Convert JSON String to PHP Object
        echo "<br><br> <b>2.1) Convert JSON String to PHP Object</b><br>";
        $json3 = '{
            "title": "JavaScript: The Definitive Guide",
            "author": "David Flanagan",
            "edition": 6
        }';
        $obj = json_decode($json3);
        // access title of $book object
        var_dump($obj); // JavaScript: The Definitive Guide 

         echo "$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$";
        $json31=' {"name ":"AAA","age":"20","tickets":["QR","St","RS"]}';
        $obj31 = json_decode($json31);
        var_dump($obj31); // JavaScript: The Definitive Guide 

//--------------------------------------------------Convert PHP Object to JSON String
        $foo = new StdClass();
        $foo->hello = "world";
        $foo->bar = "baz";
        $json4 = json_encode($foo);  //
        echo "<br><b> 2.2 Convert PHP Object to JSON String </b><br>";
        echo "json String :  ";
        echo $json4;
        //=> {"hello":"world","bar":"baz"}
        echo "<br> JSON String :   ";
        print_r(json_decode($json4));
        echo "<br> <br>";

        $json5= json_encode($obj);
        echo $json5;
        var_dump($json5);

/*คำสั่งที่สำคัญมี 2 คำสั่งคือ
json_encode ใช้ในการจัดรูปแบบตัวแปรของ PHP เป็น JSON String เพื่อใช้ในการส่งไปยัง Javascript
json_decode ใช้ในการจัดรูปแบบข้อมูล JSON String ที่ได้รับมาเป็นตัวแปรของ PHP*/


        //2 arrays with same keys, then you can do array_merge_recursive() to merge them together.
        $a = [ 'boys' => ['play', 'sing']];
        $b = ['boys' => 'fight'];
        $merged = array_merge_recursive($a, $b);
        print_r($merged);
        echo "<br>";
        //add array
        $str = '{ 
            "players":[
            {

                    "name":"Moldova",
                    "image":"tank.jpg"
            },
            {

                    "name":"Georgia",
                    "image":"tank.jpg"
            } ]}';


        $arr = json_decode($str, true);
         print_r($arr);
         echo "<br>";
        $arrne['name'] = "dsds";
        array_push( $arr['players'], $arrne );
        print_r($arr);
        //
        $data[0]['id']="8488";
        $data[0]['name']="Tenby";

        $data[1]['id']="8489";
        $data[1]['name']="Harbour";

        $data[2]['id']="8490";
        $data[2]['name']="Mobius";

        echo json_encode($data)."<br/>";

        /*Add Image element (or whatever) into the array according to your needs*/

        $data[0]['image']="1278.jpg";
        $data[1]['image']="1279.jpg";
        $data[2]['image']="1280.jpg";

        echo json_encode($data);
        $mydata = json_encode($data);
        //var_dump($mydata);


        ////////////หลังจากการ decode
        //$myArray[$key] = $element;
        //$myObj->$key = $element;
    ?>
</body>



</html>