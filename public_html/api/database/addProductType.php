


<form id="addProductType" >
  <fieldset>
  Type:  <input type="text" id="productType" name="productType" ><br>
  <br>
  <input type="button" value="Add" onclick="addProductType(event)">
</fieldset>
</form>
<p id="specifyDelete" data-edit="">Please specify what product type to delete below.</p>
<strong><p id ="deleteWarning" data-edit="">Warning: All products that fall under that type will also be deleted.</p></strong>
<form id="deleteProductType" >
  <fieldset>
    Type:  <input list="types" id="productT" name="productT" ><br>
    <datalist id="types"></datalist>
    <br>
    <input type="button" value="Add" onclick="deleteType(event)">
  </fieldset>
</form>
