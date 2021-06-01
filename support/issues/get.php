<!--
//Get a list of file paths using the glob function.
$fileList = glob('*.pdf');
echo json_encode($fileList), '<br>';
class TableData
{
};
class FileData
{
};
$tableData = new TableData();
$fileData = new FileData();

//Loop through the array that glob returned.
$itemNo = 1;

$jsonStart = '{"tableData":';
$jsonEnd = '}';
file_put_contents('results.json', $jsonStart);
foreach ($fileList as $filename) {
    $fileData->url = $filename;
    $fileData->itemNo = $itemNo;
    $fileData->cDate = date("M d, Y", filectime($filename));

    $nameValues = substr($filename, 0, strpos($filename, "."));
    $name = implode(' ', explode('-', $nameValues));
    $fileData->name = $name;
    echo json_encode($fileData), '<br>';

    // echo '<tr id="', $itemNo, '" onClick="file=window.open(`', $filename, '`,`file`,`width=500,height=680`); return false;"><td width="20px">', $itemNo, '</td><td>', $name, '</td><td width="200px">', date("M d, Y", filectime($filename)), '</td></tr>';

    $tableData->itemNo = (string)$itemNo;
    $tableData->file = $fileData;
    $itemNo++;
    $tableJSON = json_encode($tableData);
    $tableJSON .= '
    ';
    file_put_contents('results.json', $tableJSON, FILE_APPEND);
}
file_put_contents('results.json', $jsonEnd, FILE_APPEND); -->

<?php
$dir = "./"; //path

$list = array(); //main array

if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) != false) {

            if ($file == "." or $file == "..") {
                //...
            } else {
                if (strpos($file, '.pdf')) {
                    $nameValues = substr($filename, 0, strpos($filename, "."));
                    $name = implode(' ', explode('-', $nameValues));
                    $list3 = array(
                        'file' => $file,
                        'cDate' => date("M d, Y", filectime($file)),
                        'name' => $name
                    );
                    array_push($list, $list3);
                } else {
                }
            }
        }
    }

    $return_array = array('data' => $list);

    $return_json = json_encode($return_array);
    // echo $return_json;
    file_put_contents('results.json', $return_json);
}
?>