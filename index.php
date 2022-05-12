<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "PHP examples"?></h1>
    <?php 
        $author = "Juan Dela Cruz";
        $message = "Welcome to PHP";
        echo $author . "<br/>";
        echo $message;
    ?>
    <br>

    <?php 
        echo "The length of this message is: " . strlen($message);
        $message2 = "The quick brown fox jumps over the lazy dog";
        echo "<br/>" . str_replace("dog", "cat", $message2);
        print "<h4>Print statement example</h4>";
        $numarray = array(1,2,array("a","b","c"));
        print_r($numarray);
        echo "<br/>";
        var_dump($numarray); //Will use often

        $colorArr[0] = "red";
        $colorArr[1] = "green";
        $colorArr[2] = "blue";
        echo "<br/><br/>";
        var_dump($colorArr);

        //Key-Value Pair
        $colorArr2 = ["red"=>"#ff0000", "green"=>"#00ff00"];
        $colorArr2["blue"] = "#0000ff";
        echo "<br/><br/>";
        var_dump($colorArr2);
        $contacts = [
            array("name"=>"Jose Rizal", "email"=>"jr1@email.com","phoneNum"=>"12345"),
            array("name"=>"Jose Rizal2", "email"=>"jr2@email.com","phoneNum"=>"123456"),
            array("name"=>"Jose Rizal2", "email"=>"jr3@email.com","phoneNum"=>"1234567")
        ];
        echo "<br><br>";

        echo "Jose Rizal's email is: " . $contacts[0]["email"] . "<br/><br/>";
        var_dump($contacts);
        echo "<br/><br/>";

        $grades = array(
            "name" => ["html"=>1, "css"=>2, "js"=>3],
            "student2" => ["html"=>1, "css"=>1, "js"=>3],
            "student3" => ["html"=>1, "css"=>2, "js"=>3],
        );
        echo $grades["name"]["js"] . "<br/><br/>"; //Output: 3
        
        foreach($colorArr as $value){
            echo "<p style='color:white; background-color:$value'>$value</p>";
        };

        foreach($grades as $name=>$value){
            foreach($value as $key=>$value2){
                echo "<br/>" . $name . " " . "grade in" . $key . " is " . $value2 . "<br/>";
            }
        };
        echo "<br>";

        // Sorting, Alphabetically
        $seasons = ["spring","summer","autumn","winter"];
        sort($seasons);
        foreach($seasons as $season){
            echo $season . "<br>";
        }
        echo "<br>";

        // Reversed Sorting
        rsort($seasons);
        foreach($seasons as $season){
            echo $season . "<br>";
        }
        echo "<br><br>";

        // Counting elements of an array
        echo "Length of the array seasons: " . count($seasons) . "<br>";

        // Search for a value in an array
        $key = array_search("winter", $seasons);
        echo "Season winter key is: " . $key; //Output: 0, since we reversed sort 

        // .=
        echo "<br><br>";
        $x = "hello ";
        $y = "universe";
        $x.=$y;
        echo $x . "<br><br>";


        $d = date("D");
        if($d=="Fri"){
            echo "Have a happy weekend" . "<br><br>";
        }elseif($d=="Thu"){
            echo "It's Thursday today" . "<br><br>";
        }else{
            echo "Have a nice day" . "<br><br>";
        }

        switch($d){
            case "Mon": echo "Today is Monday" . "<br><br>"; break;
            case "Thu": echo "Today is Thursday" . "<br><br>"; break;
            default: echo "No information". "<br><br>";
        }

        // Ternary Operator
        $age = 20;
        echo ($age<18) ? "Underage" : "Adult";
        echo "<br><br>";

        // Creating a function
        function dayToday(){
            echo "Day today is: " . date("F j, Y") . "<br><br>";
        };

        dayToday();

        function getSum($a,$b){
            return $a + $b;
        };

        echo "The sum of 10 and 20 is: " . getSum(10,20);
    ?>
</body>
</html>