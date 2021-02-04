<?php 

$string_as_xml = "
    <student>
        <name>Neven</name>
        <lastname>Gjoreski</lastname>
        <age>33</age>
        <email>n.gj@gmail.com</email>
    </student>
";

echo $string_as_xml;

$object_as_xml = simplexml_load_string($string_as_xml);

echo '<pre>';
print_r($object_as_xml);
echo '</pre>';

echo $object_as_xml->email;

$string_as_xml_2 = "
    <studenti>
        <student>
            <name>Neven</name>
            <lastname>Gjoreski</lastname>
            <age>33</age>
            <email>n.gj@gmail.com</email>
            <languages>
                <language>PHP</language>
                <language>SLQ</language>
                <language>JavaScript</language>
            </languages>
        </student>
        <student>
            <name>Albert</name>
            <lastname>Ajnshtanus</lastname>
            <age>101</age>
            <email>a.a@genius.com</email>
            <languages>
                <language>PHP</language>
                <language>SLQ</language>
                <language>JavaScript</language>
            </languages>
        </student>
    </studenti>
";

$object_as_xml = simplexml_load_string($string_as_xml_2);

echo '<pre>';
print_r($object_as_xml);
echo '</pre>';

echo $object_as_xml->student[0]->languages->language[2];


// Studentot Neven Gjoreski  gi znae : PHP JavaScript SQL,
// Studentot Albert Ajnshtajnus gi znae : Pascal VisucalBasic C

// type casting (array)

foreach($object_as_xml->student as $student){
    echo "<br> Studentot e $student->name $student->lastname 
    gi znae : " , implode( ' ', (array)$student->languages->language);
}