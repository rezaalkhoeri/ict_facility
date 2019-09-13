<script>
    function AddRow(idx) 
    {
     var newRow = '<tr id="row_' + idx + '" class="datarow">'
    + '<th class="fixed-side" scope="col"><textarea id="txtDesc_' + idx + '" data-item="description" class="form-control" rows="3">' + desc + '</textarea></th>'
    + '<td style="vertical-align: middle"><input type="number"  min="1" class="form-control" onchange="CalcTotalandDiff(this)" data-item="qty" onkeyup="CalcTotalandDiff(this)" value="' + qty + '" style="text-align: right" id="txtQty_' + idx + '" /></td>'
    
        newRow += '</tr>';
        row++;
        $("#tblData1 tbody").append(newRow);
        //return $('#tblUMKDetail tr:last');
    }
</script>