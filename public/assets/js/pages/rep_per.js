var select1_changed = false;
var select2_changed = false;



$("#select1, #select2").on("change", function () {
  if ($(this).attr("id") === "select1") {
    window.select1 = $(this).val();
    console.log(window.select1);
    select1_changed = true;
  } else if ($(this).attr("id") === "select2") {
    window.select2 = $(this).val();
    console.log(window.select2);
    select2_changed = true;
  }
  
  if (select1_changed && select2_changed) {
    display_tables();
    select1_changed = false;
    select2_changed = false;
  }
});


function rep_per(){


const  genre_formation =` 
<table class="table table-centered mb-0" id="table1">

<thead class="table-dark">
<tr>
<td colspan="2" rowspan="3">
  <center>INSTITUTIONS</center>
</td>
<th colspan="2">ACADEMIQUE</th>
<th colspan="2">PROFETIONNEL</th>
<th colspan="2">
  <center>Total</center>
</th>
</tr>

<tr>
<td>T</td>
<td>F</td>
<td>T</td>
<td>F</td>
<td>T</td>
<td>F</td>
</tr>
</thead>
<tbody>

<tr>
<td rowspan="5">Université <br> de <br> Nouakchott Asrya</td>
<td>FLSH</td>
<td>3365</td>
<td>1132</td>
<td></td>
<td></td>
<td>3365</td>
<td>1132</td>
</tr>
<tr>

<td>FM</td>
<td>1364</td>
<td>554</td>
<td>93</td>
<td>45</td>
<td>1457</td>
<td>599</td>
</tr>
<tr>

<td>FSJE</td>
<td>6188</td>
<td>2522</td>
<td>2</td>
<td></td>
<td>6190</td>
<td>2522</td>
</tr>
<tr>

<td>FST</td>
<td>4244</td>
<td>1494</td>
<td>107</td>
<td>49</td>
<td>4351</td>
<td>1543</td>
</tr>
<tr>

<td>IUP</td>
<td>939</td>
<td>494</td>
<td>1</td>
<td></td>
<td>940</td>
<td>494</td>
</tr>
<tr>
<td rowspan="3">Université des Sciences Islamiques d’Aioun</td>
<td>FC</td>
<td>473</td>
<td>136</td>
<td></td>
<td></td>
<td>473</td>
<td>136</td>
</tr>
<tr>

<td>FLASH</td>
<td>427</td>
<td>265</td>
<td>3</td>
<td>3</td>
<td>430</td>
<td>268</td>
</tr>
<tr>

<td>FOE</td>
<td>223</td>
<td>62</td>
<td></td>
<td></td>
<td>223</td>
<td>62</td>
</tr>
<tr>
<td rowspan="4">Ecole Supérieure Polytechnique</td>
<td>ESP cycle Ing</td>
<td>139</td>
<td>46</td>
<td></td>
<td></td>
<td>139</td>
<td>46</td>
</tr>

<tr>

<td>IPGE</td>
<td>237</td>
<td>40</td>
<td></td>
<td></td>
<td>237</td>
<td>40</td>
</tr>
<tr>

<td>IS2M</td>
<td>119</td>
<td>23</td>
<td></td>
<td></td>
<td>119</td>
<td>23</td>
</tr>
<tr>

<td>ISMBTPU</td>
<td>265</td>
<td>44</td>
<td></td>
<td></td>
<td>265</td>
<td>44</td>
</tr>
<tr>
<td rowspan="2">Academie Navale</td>
<td>ESO</td>
<td>45</td>
<td></td>
<td></td>
<td></td>
<td>45</td>
<td>0</td>
</tr>
<tr>

<td>ISSM</td>
<td>83</td>
<td>25</td>
<td></td>
<td></td>
<td>83</td>
<td>25</td>
</tr>
<tr>
<td>ENS</td>
<td></td>
<td>592</td>
<td>125</td>
<td></td>
<td></td>
<td>592</td>
<td>125</td>
</tr>
<tr>
<td>ISA</td>
<td></td>
<td>123</td>
<td>30</td>
<td></td>
<td></td>
<td>123</td>
<td>30</td>
</tr>
<tr>
<td>ISCAE</td>
<td></td>
<td>1418</td>
<td>826</td>
<td></td>
<td></td>
<td>1418</td>
<td>826</td>
</tr>
<tr>
<td>ISERI</td>
<td></td>
<td>2558</td>
<td>875</td>
<td>126</td>
<td>5</td>
<td>2684</td>
<td>880</td>
</tr>
<tr>
<td>ISET</td>
<td></td>
<td>328</td>
<td>27</td>
<td></td>
<td></td>
<td>328</td>
<td>27</td>
</tr>
<tr>
<td>ISPLTI</td>
<td></td>
<td>194</td>
<td>75</td>
<td></td>
<td></td>
<td>194</td>
<td>75</td>
</tr>
<tr>
<td>Total général</td>
<td></td>
<td>23324</td>
<td>8795</td>
<td>332</td>
<td>102</td>
<td>23656</td>
<td>8897</td>
</tr>
</tbody>
</table>`;

const genre_redoublant=` <table class="table table-centered mb-0" id="table1">

<thead class="table-dark">
<tr>
<td colspan="2" rowspan="3">
  <center>INSTITUTIONS</center>
</td>
<th colspan="2">OUI</th>
<th colspan="2">NON</th>
<th colspan="2">
  <center>Total</center>
</th>
</tr>

<tr>
<td>T</td>
<td>F</td>
<td>T</td>
<td>F</td>
<td>T</td>
<td>F</td>
</tr>
</thead>
<tbody>

<tr>
<td rowspan="5">Université <br> de <br> Nouakchott Asrya</td>
<td>FLSH</td>
<td>3365</td>
<td>1132</td>
<td></td>
<td></td>
<td>3365</td>
<td>1132</td>
</tr>
<tr>

<td>FM</td>
<td>1364</td>
<td>554</td>
<td>93</td>
<td>45</td>
<td>1457</td>
<td>599</td>
</tr>
<tr>

<td>FSJE</td>
<td>6188</td>
<td>2522</td>
<td>2</td>
<td></td>
<td>6190</td>
<td>2522</td>
</tr>
<tr>

<td>FST</td>
<td>4244</td>
<td>1494</td>
<td>107</td>
<td>49</td>
<td>4351</td>
<td>1543</td>
</tr>
<tr>

<td>IUP</td>
<td>939</td>
<td>494</td>
<td>1</td>
<td></td>
<td>940</td>
<td>494</td>
</tr>
<tr>
<td rowspan="3">Université des Sciences Islamiques d’Aioun</td>
<td>FC</td>
<td>473</td>
<td>136</td>
<td></td>
<td></td>
<td>473</td>
<td>136</td>
</tr>
<tr>

<td>FLASH</td>
<td>427</td>
<td>265</td>
<td>3</td>
<td>3</td>
<td>430</td>
<td>268</td>
</tr>
<tr>

<td>FOE</td>
<td>223</td>
<td>62</td>
<td></td>
<td></td>
<td>223</td>
<td>62</td>
</tr>
<tr>
<td rowspan="4">Ecole Supérieure Polytechnique</td>
<td>ESP cycle Ing</td>
<td>139</td>
<td>46</td>
<td></td>
<td></td>
<td>139</td>
<td>46</td>
</tr>

<tr>

<td>IPGE</td>
<td>237</td>
<td>40</td>
<td></td>
<td></td>
<td>237</td>
<td>40</td>
</tr>
<tr>

<td>IS2M</td>
<td>119</td>
<td>23</td>
<td></td>
<td></td>
<td>119</td>
<td>23</td>
</tr>
<tr>

<td>ISMBTPU</td>
<td>265</td>
<td>44</td>
<td></td>
<td></td>
<td>265</td>
<td>44</td>
</tr>
<tr>
<td rowspan="2">Academie Navale</td>
<td>ESO</td>
<td>45</td>
<td></td>
<td></td>
<td></td>
<td>45</td>
<td>0</td>
</tr>
<tr>

<td>ISSM</td>
<td>83</td>
<td>25</td>
<td></td>
<td></td>
<td>83</td>
<td>25</td>
</tr>
<tr>
<td>ENS</td>
<td></td>
<td>592</td>
<td>125</td>
<td></td>
<td></td>
<td>592</td>
<td>125</td>
</tr>
<tr>
<td>ISA</td>
<td></td>
<td>123</td>
<td>30</td>
<td></td>
<td></td>
<td>123</td>
<td>30</td>
</tr>
<tr>
<td>ISCAE</td>
<td></td>
<td>1418</td>
<td>826</td>
<td></td>
<td></td>
<td>1418</td>
<td>826</td>
</tr>
<tr>
<td>ISERI</td>
<td></td>
<td>2558</td>
<td>875</td>
<td>126</td>
<td>5</td>
<td>2684</td>
<td>880</td>
</tr>
<tr>
<td>ISET</td>
<td></td>
<td>328</td>
<td>27</td>
<td></td>
<td></td>
<td>328</td>
<td>27</td>
</tr>
<tr>
<td>ISPLTI</td>
<td></td>
<td>194</td>
<td>75</td>
<td></td>
<td></td>
<td>194</td>
<td>75</td>
</tr>
<tr>
<td>Total général</td>
<td></td>
<td>23324</td>
<td>8795</td>
<td>332</td>
<td>102</td>
<td>23656</td>
<td>8897</td>
</tr>
</tbody>
</table>`;
const genre_boursier=` <table class="table table-centered mb-0" id="table1">

<thead class="table-dark">
<tr>
<td colspan="2" rowspan="3">
  <center>INSTITUTIONS</center>
</td>
<th colspan="2">OUI</th>
<th colspan="2">NON</th>
<th colspan="2">
  <center>Total</center>
</th>
</tr>

<tr>
<td>T</td>
<td>F</td>
<td>T</td>
<td>F</td>
<td>T</td>
<td>F</td>
</tr>
</thead>
<tbody>

<tr>
<td rowspan="5">Université <br> de <br> Nouakchott Asrya</td>
<td>FLSH</td>
<td>3365</td>
<td>1132</td>
<td></td>
<td></td>
<td>3365</td>
<td>1132</td>
</tr>
<tr>

<td>FM</td>
<td>1364</td>
<td>554</td>
<td>93</td>
<td>45</td>
<td>1457</td>
<td>599</td>
</tr>
<tr>

<td>FSJE</td>
<td>6188</td>
<td>2522</td>
<td>2</td>
<td></td>
<td>6190</td>
<td>2522</td>
</tr>
<tr>

<td>FST</td>
<td>4244</td>
<td>1494</td>
<td>107</td>
<td>49</td>
<td>4351</td>
<td>1543</td>
</tr>
<tr>

<td>IUP</td>
<td>939</td>
<td>494</td>
<td>1</td>
<td></td>
<td>940</td>
<td>494</td>
</tr>
<tr>
<td rowspan="3">Université des Sciences Islamiques d’Aioun</td>
<td>FC</td>
<td>473</td>
<td>136</td>
<td></td>
<td></td>
<td>473</td>
<td>136</td>
</tr>
<tr>

<td>FLASH</td>
<td>427</td>
<td>265</td>
<td>3</td>
<td>3</td>
<td>430</td>
<td>268</td>
</tr>
<tr>

<td>FOE</td>
<td>223</td>
<td>62</td>
<td></td>
<td></td>
<td>223</td>
<td>62</td>
</tr>
<tr>
<td rowspan="4">Ecole Supérieure Polytechnique</td>
<td>ESP cycle Ing</td>
<td>139</td>
<td>46</td>
<td></td>
<td></td>
<td>139</td>
<td>46</td>
</tr>

<tr>

<td>IPGE</td>
<td>237</td>
<td>40</td>
<td></td>
<td></td>
<td>237</td>
<td>40</td>
</tr>
<tr>

<td>IS2M</td>
<td>119</td>
<td>23</td>
<td></td>
<td></td>
<td>119</td>
<td>23</td>
</tr>
<tr>

<td>ISMBTPU</td>
<td>265</td>
<td>44</td>
<td></td>
<td></td>
<td>265</td>
<td>44</td>
</tr>
<tr>
<td rowspan="2">Academie Navale</td>
<td>ESO</td>
<td>45</td>
<td></td>
<td></td>
<td></td>
<td>45</td>
<td>0</td>
</tr>
<tr>

<td>ISSM</td>
<td>83</td>
<td>25</td>
<td></td>
<td></td>
<td>83</td>
<td>25</td>
</tr>
<tr>
<td>ENS</td>
<td></td>
<td>592</td>
<td>125</td>
<td></td>
<td></td>
<td>592</td>
<td>125</td>
</tr>
<tr>
<td>ISA</td>
<td></td>
<td>123</td>
<td>30</td>
<td></td>
<td></td>
<td>123</td>
<td>30</td>
</tr>
<tr>
<td>ISCAE</td>
<td></td>
<td>1418</td>
<td>826</td>
<td></td>
<td></td>
<td>1418</td>
<td>826</td>
</tr>
<tr>
<td>ISERI</td>
<td></td>
<td>2558</td>
<td>875</td>
<td>126</td>
<td>5</td>
<td>2684</td>
<td>880</td>
</tr>
<tr>
<td>ISET</td>
<td></td>
<td>328</td>
<td>27</td>
<td></td>
<td></td>
<td>328</td>
<td>27</td>
</tr>
<tr>
<td>ISPLTI</td>
<td></td>
<td>194</td>
<td>75</td>
<td></td>
<td></td>
<td>194</td>
<td>75</td>
</tr>
<tr>
<td>Total général</td>
<td></td>
<td>23324</td>
<td>8795</td>
<td>332</td>
<td>102</td>
<td>23656</td>
<td>8897</td>
</tr>
</tbody>
</table>`;
const genre_transefere=` <table class="table table-centered mb-0" id="table1">

<thead class="table-dark">
<tr>
<td colspan="2" rowspan="3">
  <center>INSTITUTIONS</center>
</td>
<th colspan="2">OUI</th>
<th colspan="2">NON</th>
<th colspan="2">
  <center>Total</center>
</th>
</tr>

<tr>
<td>T</td>
<td>F</td>
<td>T</td>
<td>F</td>
<td>T</td>
<td>F</td>
</tr>
</thead>
<tbody>

<tr>
<td rowspan="5">Université <br> de <br> Nouakchott Asrya</td>
<td>FLSH</td>
<td>3365</td>
<td>1132</td>
<td></td>
<td></td>
<td>3365</td>
<td>1132</td>
</tr>
<tr>

<td>FM</td>
<td>1364</td>
<td>554</td>
<td>93</td>
<td>45</td>
<td>1457</td>
<td>599</td>
</tr>
<tr>

<td>FSJE</td>
<td>6188</td>
<td>2522</td>
<td>2</td>
<td></td>
<td>6190</td>
<td>2522</td>
</tr>
<tr>

<td>FST</td>
<td>4244</td>
<td>1494</td>
<td>107</td>
<td>49</td>
<td>4351</td>
<td>1543</td>
</tr>
<tr>

<td>IUP</td>
<td>939</td>
<td>494</td>
<td>1</td>
<td></td>
<td>940</td>
<td>494</td>
</tr>
<tr>
<td rowspan="3">Université des Sciences Islamiques d’Aioun</td>
<td>FC</td>
<td>473</td>
<td>136</td>
<td></td>
<td></td>
<td>473</td>
<td>136</td>
</tr>
<tr>

<td>FLASH</td>
<td>427</td>
<td>265</td>
<td>3</td>
<td>3</td>
<td>430</td>
<td>268</td>
</tr>
<tr>

<td>FOE</td>
<td>223</td>
<td>62</td>
<td></td>
<td></td>
<td>223</td>
<td>62</td>
</tr>
<tr>
<td rowspan="4">Ecole Supérieure Polytechnique</td>
<td>ESP cycle Ing</td>
<td>139</td>
<td>46</td>
<td></td>
<td></td>
<td>139</td>
<td>46</td>
</tr>

<tr>

<td>IPGE</td>
<td>237</td>
<td>40</td>
<td></td>
<td></td>
<td>237</td>
<td>40</td>
</tr>
<tr>

<td>IS2M</td>
<td>119</td>
<td>23</td>
<td></td>
<td></td>
<td>119</td>
<td>23</td>
</tr>
<tr>

<td>ISMBTPU</td>
<td>265</td>
<td>44</td>
<td></td>
<td></td>
<td>265</td>
<td>44</td>
</tr>
<tr>
<td rowspan="2">Academie Navale</td>
<td>ESO</td>
<td>45</td>
<td></td>
<td></td>
<td></td>
<td>45</td>
<td>0</td>
</tr>
<tr>

<td>ISSM</td>
<td>83</td>
<td>25</td>
<td></td>
<td></td>
<td>83</td>
<td>25</td>
</tr>
<tr>
<td>ENS</td>
<td></td>
<td>592</td>
<td>125</td>
<td></td>
<td></td>
<td>592</td>
<td>125</td>
</tr>
<tr>
<td>ISA</td>
<td></td>
<td>123</td>
<td>30</td>
<td></td>
<td></td>
<td>123</td>
<td>30</td>
</tr>
<tr>
<td>ISCAE</td>
<td></td>
<td>1418</td>
<td>826</td>
<td></td>
<td></td>
<td>1418</td>
<td>826</td>
</tr>
<tr>
<td>ISERI</td>
<td></td>
<td>2558</td>
<td>875</td>
<td>126</td>
<td>5</td>
<td>2684</td>
<td>880</td>
</tr>
<tr>
<td>ISET</td>
<td></td>
<td>328</td>
<td>27</td>
<td></td>
<td></td>
<td>328</td>
<td>27</td>
</tr>
<tr>
<td>ISPLTI</td>
<td></td>
<td>194</td>
<td>75</td>
<td></td>
<td></td>
<td>194</td>
<td>75</td>
</tr>
<tr>
<td>Total général</td>
<td></td>
<td>23324</td>
<td>8795</td>
<td>332</td>
<td>102</td>
<td>23656</td>
<td>8897</td>
</tr>
</tbody>
</table>`;
const genre_lg_formation=` <table class="table table-centered mb-0" id="table1">

<thead class="table-dark">
<tr>
<td colspan="2" rowspan="3">
  <center>INSTITUTIONS</center>
</td>
<th colspan="2">Anglais</th>
<th colspan="2">Francais</th>
<th colspan="2">
  <center>Total</center>
</th>
</tr>

<tr>
<td>T</td>
<td>F</td>
<td>T</td>
<td>F</td>
<td>T</td>
<td>F</td>
</tr>
</thead>
<tbody>

<tr>
<td rowspan="5">Université <br> de <br> Nouakchott Asrya</td>
<td>FLSH</td>
<td>3365</td>
<td>1132</td>
<td></td>
<td></td>
<td>3365</td>
<td>1132</td>
</tr>
<tr>

<td>FM</td>
<td>1364</td>
<td>554</td>
<td>93</td>
<td>45</td>
<td>1457</td>
<td>599</td>
</tr>
<tr>

<td>FSJE</td>
<td>6188</td>
<td>2522</td>
<td>2</td>
<td></td>
<td>6190</td>
<td>2522</td>
</tr>
<tr>

<td>FST</td>
<td>4244</td>
<td>1494</td>
<td>107</td>
<td>49</td>
<td>4351</td>
<td>1543</td>
</tr>
<tr>

<td>IUP</td>
<td>939</td>
<td>494</td>
<td>1</td>
<td></td>
<td>940</td>
<td>494</td>
</tr>
<tr>
<td rowspan="3">Université des Sciences Islamiques d’Aioun</td>
<td>FC</td>
<td>473</td>
<td>136</td>
<td></td>
<td></td>
<td>473</td>
<td>136</td>
</tr>
<tr>

<td>FLASH</td>
<td>427</td>
<td>265</td>
<td>3</td>
<td>3</td>
<td>430</td>
<td>268</td>
</tr>
<tr>

<td>FOE</td>
<td>223</td>
<td>62</td>
<td></td>
<td></td>
<td>223</td>
<td>62</td>
</tr>
<tr>
<td rowspan="4">Ecole Supérieure Polytechnique</td>
<td>ESP cycle Ing</td>
<td>139</td>
<td>46</td>
<td></td>
<td></td>
<td>139</td>
<td>46</td>
</tr>

<tr>

<td>IPGE</td>
<td>237</td>
<td>40</td>
<td></td>
<td></td>
<td>237</td>
<td>40</td>
</tr>
<tr>

<td>IS2M</td>
<td>119</td>
<td>23</td>
<td></td>
<td></td>
<td>119</td>
<td>23</td>
</tr>
<tr>

<td>ISMBTPU</td>
<td>265</td>
<td>44</td>
<td></td>
<td></td>
<td>265</td>
<td>44</td>
</tr>
<tr>
<td rowspan="2">Academie Navale</td>
<td>ESO</td>
<td>45</td>
<td></td>
<td></td>
<td></td>
<td>45</td>
<td>0</td>
</tr>
<tr>

<td>ISSM</td>
<td>83</td>
<td>25</td>
<td></td>
<td></td>
<td>83</td>
<td>25</td>
</tr>
<tr>
<td>ENS</td>
<td></td>
<td>592</td>
<td>125</td>
<td></td>
<td></td>
<td>592</td>
<td>125</td>
</tr>
<tr>
<td>ISA</td>
<td></td>
<td>123</td>
<td>30</td>
<td></td>
<td></td>
<td>123</td>
<td>30</td>
</tr>
<tr>
<td>ISCAE</td>
<td></td>
<td>1418</td>
<td>826</td>
<td></td>
<td></td>
<td>1418</td>
<td>826</td>
</tr>
<tr>
<td>ISERI</td>
<td></td>
<td>2558</td>
<td>875</td>
<td>126</td>
<td>5</td>
<td>2684</td>
<td>880</td>
</tr>
<tr>
<td>ISET</td>
<td></td>
<td>328</td>
<td>27</td>
<td></td>
<td></td>
<td>328</td>
<td>27</td>
</tr>
<tr>
<td>ISPLTI</td>
<td></td>
<td>194</td>
<td>75</td>
<td></td>
<td></td>
<td>194</td>
<td>75</td>
</tr>
<tr>
<td>Total général</td>
<td></td>
<td>23324</td>
<td>8795</td>
<td>332</td>
<td>102</td>
<td>23656</td>
<td>8897</td>
</tr>
</tbody>
</table>`;
const boursier_niveau=`<table  class="table table-centered mb-0" id="table1">
<thead class="table-dark"> 
<tr>
    <th>INSTITUTIONS</th>
    <th></th>
    <th>L1</th>
    <th></th>
    <th>L2</th>
    <th></th>
    <th>L3</th>
    <th></th>
    <th>M1</th>
    <th></th>
    <th>M2</th>
    <th></th>
    <th>D1</th>
    <th></th>
    <th>D2</th>
    <th></th>
    <th>D3</th>
    <th></th>
    <th>D4</th>
    <th></th>
    <th>D5</th>
    <th></th>
    <th>Totaux</th>
    <th></th>
</tr>
</thead>
<tbody>
<tr>
    <td></td>
    <td></td>
    <td>oui</td>
    <td>non</td>
    <td>oui</td>
    <td>non</td>
    <td>oui</td>
    <td>non</td>
    <td>oui</td>
    <td>non</td>
    <td>oui</td>
    <td>non</td>
    <td>oui</td>
    <td>non</td>
    <td></td>
    <td>oui</td>
    <td>non</td>
    <td>oui</td>
    <td>non</td>
    <td>oui</td>
    <td>non</td>
    <td>oui</td>
    <td>non</td>
    <td>oui</td>
</tr>
<tr>
    <td>UNA</td>
    <td>FLSH</td>
    <td>1605</td>
    <td>537</td>
    <td>763</td>
    <td>287</td>
    <td>601</td>
    <td>207</td>
    <td>122</td>
    <td>34</td>
    <td>175</td>
    <td>48</td>
    <td>99</td>
    <td>19</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>3365</td>
    <td>1132</td>
</tr>
<tr>
    <td></td>
    <td>FSJE</td>
    <td>3523</td>
    <td>1409</td>
    <td>1355</td>
    <td>626</td>
    <td>572</td>
    <td>229</td>
    <td>494</td>
    <td>187</td>
    <td>139</td>
    <td>46</td>
    <td>107</td>
    <td>25</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>6190</td>
    <td>2522</td>
</tr>
<tr>
    <td></td>
    <td>FST</td>
    <td>1723</td>
    <td>567</td>
    <td>1299</td>
    <td>530</td>
    <td>883</td>
    <td>290</td>
    <td>152</td>
    <td>37</td>
    <td>179</td>
    <td>70</td>
    <td>32</td>
    <td>20</td>
    <td>38</td>
    <td>15</td>
    <td>22</td>
    <td>8</td>
    <td>11</td>
    <td>1</td>
    <td>12</td>
    <td>5</td>
    <td>4351</td>
    <td>1543</td>
</tr>
<tr>
    <td></td>
    <td>IUP</td>
    <td>486</td>
    <td>239</td>
    <td>250</td>
    <td>144</td>
    <td>204</td>
    <td>111</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>940</td>
    <td>494</td>
</tr>
<tr>
    <td>USIA</td>
    <td>FLASH</td>
    <td>139</td>
    <td>38</td>
    <td>128</td>
    <td>50</td>
    <td>109</td>
    <td>41</td>
    <td></td>
    <td></td>
    <td>97</td>
    <td>7</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>473</td>
    <td>136</td>
</tr>
<tr>
    <td></td>
    <td>FOE</td>
    <td>177</td>
    <td>108</td>
    <td>113</td>
    <td>69</td>
    <td>140</td>
    <td>91</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>430</td>
    <td>268</td>
</tr>
<tr>
    <td></td>
    <td>FC</td>
    <td>109</td>
    <td>32</td>
    <td>69</td>
    <td>24</td>
    <td>45</td>
    <td>6</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>223</td>
    <td>62</td>
</tr>
<tr>
    <td>ISET</td>
    <td></td>
    <td>594</td>
    <td>312</td>
    <td>337</td>
    <td>211</td>
    <td>364</td>
    <td>226</td>
    <td>71</td>
    <td>46</td>
    <td>52</td>
    <td>31</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>1418</td>
    <td>826</td>
</tr>
<tr>
    <td>ISCAE</td>
    <td></td>
    <td>108</td>
    <td>11</td>
    <td>106</td>
    <td>7</td>
    <td>114</td>
    <td>9</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>328</td>
    <td>27</td>
</tr>
<tr>
    <td>ISERI</td>
    <td></td>
    <td>44</td>
    <td>16</td>
    <td>27</td>
    <td>4</td>
    <td>52</td>
    <td>10</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>123</td>
    <td>30</td>
</tr>
<tr>
    <td>ISPLTI</td>
    <td></td>
    <td>1287</td>
    <td>506</td>
    <td>439</td>
    <td>137</td>
    <td>500</td>
    <td>173</td>
    <td>346</td>
    <td>52</td>
    <td>112</td>
    <td>12</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>2684</td>
    <td>880</td>
</tr>
<tr>
    <td>ISA</td>
    <td></td>
    <td>103</td>
    <td>33</td>
    <td>52</td>
    <td>23</td>
    <td>39</td>
    <td>19</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>194</td>
    <td>75</td>
</tr>
<tr>
    <td>Total</td>
    <td></td>
    <td>9899</td>
    <td>3808</td>
    <td>4938</td>
    <td>2112</td>
    <td>3622</td>
    <td>1412</td>
    <td>1185</td>
    <td>356</td>
    <td>754</td>
    <td>214</td>
    <td>238</td>
    <td>64</td>
    <td>38</td>
    <td>15</td>
    <td>22</td>
    <td>8</td>
    <td>11</td>
    <td>1</td>
    <td>12</td>
    <td>5</td>
    <td>20719</td>
    <td>7995</td>
</tr>
</tbody>
</table>`;
const transefere_niveau=`<table  class="table table-centered mb-0" id="table1">
<thead class="table-dark"> 
<tr>
    <th>INSTITUTIONS</th>
    <th></th>
    <th>L1</th>
    <th></th>
    <th>L2</th>
    <th></th>
    <th>L3</th>
    <th></th>
    <th>M1</th>
    <th></th>
    <th>M2</th>
    <th></th>
    <th>D1</th>
    <th></th>
    <th>D2</th>
    <th></th>
    <th>D3</th>
    <th></th>
    <th>D4</th>
    <th></th>
    <th>D5</th>
    <th></th>
    <th>Totaux</th>
    <th></th>
</tr>
</thead>
<tbody>
<tr>
    <td></td>
    <td></td>
    <td>oui</td>
    <td>non</td>
    <td>oui</td>
    <td>non</td>
    <td>oui</td>
    <td>non</td>
    <td>oui</td>
    <td>non</td>
    <td>oui</td>
    <td>non</td>
    <td>oui</td>
    <td>non</td>
    <td></td>
    <td>oui</td>
    <td>non</td>
    <td>oui</td>
    <td>non</td>
    <td>oui</td>
    <td>non</td>
    <td>oui</td>
    <td>non</td>
    <td>oui</td>
</tr>
<tr>
    <td>UNA</td>
    <td>FLSH</td>
    <td>1605</td>
    <td>537</td>
    <td>763</td>
    <td>287</td>
    <td>601</td>
    <td>207</td>
    <td>122</td>
    <td>34</td>
    <td>175</td>
    <td>48</td>
    <td>99</td>
    <td>19</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>3365</td>
    <td>1132</td>
</tr>
<tr>
    <td></td>
    <td>FSJE</td>
    <td>3523</td>
    <td>1409</td>
    <td>1355</td>
    <td>626</td>
    <td>572</td>
    <td>229</td>
    <td>494</td>
    <td>187</td>
    <td>139</td>
    <td>46</td>
    <td>107</td>
    <td>25</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>6190</td>
    <td>2522</td>
</tr>
<tr>
    <td></td>
    <td>FST</td>
    <td>1723</td>
    <td>567</td>
    <td>1299</td>
    <td>530</td>
    <td>883</td>
    <td>290</td>
    <td>152</td>
    <td>37</td>
    <td>179</td>
    <td>70</td>
    <td>32</td>
    <td>20</td>
    <td>38</td>
    <td>15</td>
    <td>22</td>
    <td>8</td>
    <td>11</td>
    <td>1</td>
    <td>12</td>
    <td>5</td>
    <td>4351</td>
    <td>1543</td>
</tr>
<tr>
    <td></td>
    <td>IUP</td>
    <td>486</td>
    <td>239</td>
    <td>250</td>
    <td>144</td>
    <td>204</td>
    <td>111</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>940</td>
    <td>494</td>
</tr>
<tr>
    <td>USIA</td>
    <td>FLASH</td>
    <td>139</td>
    <td>38</td>
    <td>128</td>
    <td>50</td>
    <td>109</td>
    <td>41</td>
    <td></td>
    <td></td>
    <td>97</td>
    <td>7</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>473</td>
    <td>136</td>
</tr>
<tr>
    <td></td>
    <td>FOE</td>
    <td>177</td>
    <td>108</td>
    <td>113</td>
    <td>69</td>
    <td>140</td>
    <td>91</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>430</td>
    <td>268</td>
</tr>
<tr>
    <td></td>
    <td>FC</td>
    <td>109</td>
    <td>32</td>
    <td>69</td>
    <td>24</td>
    <td>45</td>
    <td>6</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>223</td>
    <td>62</td>
</tr>
<tr>
    <td>ISET</td>
    <td></td>
    <td>594</td>
    <td>312</td>
    <td>337</td>
    <td>211</td>
    <td>364</td>
    <td>226</td>
    <td>71</td>
    <td>46</td>
    <td>52</td>
    <td>31</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>1418</td>
    <td>826</td>
</tr>
<tr>
    <td>ISCAE</td>
    <td></td>
    <td>108</td>
    <td>11</td>
    <td>106</td>
    <td>7</td>
    <td>114</td>
    <td>9</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>328</td>
    <td>27</td>
</tr>
<tr>
    <td>ISERI</td>
    <td></td>
    <td>44</td>
    <td>16</td>
    <td>27</td>
    <td>4</td>
    <td>52</td>
    <td>10</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>123</td>
    <td>30</td>
</tr>
<tr>
    <td>ISPLTI</td>
    <td></td>
    <td>1287</td>
    <td>506</td>
    <td>439</td>
    <td>137</td>
    <td>500</td>
    <td>173</td>
    <td>346</td>
    <td>52</td>
    <td>112</td>
    <td>12</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>2684</td>
    <td>880</td>
</tr>
<tr>
    <td>ISA</td>
    <td></td>
    <td>103</td>
    <td>33</td>
    <td>52</td>
    <td>23</td>
    <td>39</td>
    <td>19</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>194</td>
    <td>75</td>
</tr>
<tr>
    <td>Total</td>
    <td></td>
    <td>9899</td>
    <td>3808</td>
    <td>4938</td>
    <td>2112</td>
    <td>3622</td>
    <td>1412</td>
    <td>1185</td>
    <td>356</td>
    <td>754</td>
    <td>214</td>
    <td>238</td>
    <td>64</td>
    <td>38</td>
    <td>15</td>
    <td>22</td>
    <td>8</td>
    <td>11</td>
    <td>1</td>
    <td>12</td>
    <td>5</td>
    <td>20719</td>
    <td>7995</td>
</tr>
</tbody>
</table>`;
const niveau_nationalité= `<table  class="table table-centered mb-0" id="table1">
<thead class="table-dark"> 
<tr>
    <th>INSTITUTIONS</th>
    <th></th>
    <th>L1</th>
    <th></th>
    <th>L2</th>
    <th></th>
    <th>L3</th>
    <th></th>
    <th>M1</th>
    <th></th>
    <th>M2</th>
    <th></th>
    <th>D1</th>
    <th></th>
    <th>D2</th>
    <th></th>
    <th>D3</th>
    <th></th>
    <th>D4</th>
    <th></th>
    <th>D5</th>
    <th></th>
    <th>Totaux</th>
    <th></th>
</tr>
</thead>
<tbody>
<tr>
    <td></td>
    <td></td>
    <td>ETRANGERS</td>
    <td>NATIONAUX</td>
    <td>ETRANGERS</td>
    <td>NATIONAUX</td>
    <td>ETRANGERS</td>
    <td>NATIONAUX</td>
    <td>ETRANGERS</td>
    <td>NATIONAUX</td>
    <td>ETRANGERS</td>
    <td>NATIONAUX</td>
    <td>ETRANGERS</td>
    <td>NATIONAUX</td>
    <td></td>
    <td>ETRANGERS</td>
    <td>NATIONAUX</td>
    <td>ETRANGERS</td>
    <td>NATIONAUX</td>
    <td>ETRANGERS</td>
    <td>NATIONAUX</td>
    <td>ETRANGERS</td>
    <td>NATIONAUX</td>
    <td>ETRANGERS</td>
</tr>
<tr>
    <td>UNA</td>
    <td>FLSH</td>
    <td>1605</td>
    <td>537</td>
    <td>763</td>
    <td>287</td>
    <td>601</td>
    <td>207</td>
    <td>122</td>
    <td>34</td>
    <td>175</td>
    <td>48</td>
    <td>99</td>
    <td>19</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>3365</td>
    <td>1132</td>
</tr>
<tr>
    <td></td>
    <td>FSJE</td>
    <td>3523</td>
    <td>1409</td>
    <td>1355</td>
    <td>626</td>
    <td>572</td>
    <td>229</td>
    <td>494</td>
    <td>187</td>
    <td>139</td>
    <td>46</td>
    <td>107</td>
    <td>25</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>6190</td>
    <td>2522</td>
</tr>
<tr>
    <td></td>
    <td>FST</td>
    <td>1723</td>
    <td>567</td>
    <td>1299</td>
    <td>530</td>
    <td>883</td>
    <td>290</td>
    <td>152</td>
    <td>37</td>
    <td>179</td>
    <td>70</td>
    <td>32</td>
    <td>20</td>
    <td>38</td>
    <td>15</td>
    <td>22</td>
    <td>8</td>
    <td>11</td>
    <td>1</td>
    <td>12</td>
    <td>5</td>
    <td>4351</td>
    <td>1543</td>
</tr>
<tr>
    <td></td>
    <td>IUP</td>
    <td>486</td>
    <td>239</td>
    <td>250</td>
    <td>144</td>
    <td>204</td>
    <td>111</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>940</td>
    <td>494</td>
</tr>
<tr>
    <td>USIA</td>
    <td>FLASH</td>
    <td>139</td>
    <td>38</td>
    <td>128</td>
    <td>50</td>
    <td>109</td>
    <td>41</td>
    <td></td>
    <td></td>
    <td>97</td>
    <td>7</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>473</td>
    <td>136</td>
</tr>
<tr>
    <td></td>
    <td>FOE</td>
    <td>177</td>
    <td>108</td>
    <td>113</td>
    <td>69</td>
    <td>140</td>
    <td>91</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>430</td>
    <td>268</td>
</tr>
<tr>
    <td></td>
    <td>FC</td>
    <td>109</td>
    <td>32</td>
    <td>69</td>
    <td>24</td>
    <td>45</td>
    <td>6</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>223</td>
    <td>62</td>
</tr>
<tr>
    <td>ISET</td>
    <td></td>
    <td>594</td>
    <td>312</td>
    <td>337</td>
    <td>211</td>
    <td>364</td>
    <td>226</td>
    <td>71</td>
    <td>46</td>
    <td>52</td>
    <td>31</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>1418</td>
    <td>826</td>
</tr>
<tr>
    <td>ISCAE</td>
    <td></td>
    <td>108</td>
    <td>11</td>
    <td>106</td>
    <td>7</td>
    <td>114</td>
    <td>9</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>328</td>
    <td>27</td>
</tr>
<tr>
    <td>ISERI</td>
    <td></td>
    <td>44</td>
    <td>16</td>
    <td>27</td>
    <td>4</td>
    <td>52</td>
    <td>10</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>123</td>
    <td>30</td>
</tr>
<tr>
    <td>ISPLTI</td>
    <td></td>
    <td>1287</td>
    <td>506</td>
    <td>439</td>
    <td>137</td>
    <td>500</td>
    <td>173</td>
    <td>346</td>
    <td>52</td>
    <td>112</td>
    <td>12</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>2684</td>
    <td>880</td>
</tr>
<tr>
    <td>ISA</td>
    <td></td>
    <td>103</td>
    <td>33</td>
    <td>52</td>
    <td>23</td>
    <td>39</td>
    <td>19</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>194</td>
    <td>75</td>
</tr>
<tr>
    <td>Total</td>
    <td></td>
    <td>9899</td>
    <td>3808</td>
    <td>4938</td>
    <td>2112</td>
    <td>3622</td>
    <td>1412</td>
    <td>1185</td>
    <td>356</td>
    <td>754</td>
    <td>214</td>
    <td>238</td>
    <td>64</td>
    <td>38</td>
    <td>15</td>
    <td>22</td>
    <td>8</td>
    <td>11</td>
    <td>1</td>
    <td>12</td>
    <td>5</td>
    <td>20719</td>
    <td>7995</td>
</tr>
</tbody>
</table>`;
const redoublant_formation=`<table  class="table table-centered mb-0" id="table1">
<thead class="table-dark"> 
<tr>
    <th>INSTITUTIONS</th>
    <th></th>
    <th>L1</th>
    <th></th>
    <th>L2</th>
    <th></th>
    <th>L3</th>
    <th></th>
    <th>M1</th>
    <th></th>
    <th>M2</th>
    <th></th>
    <th>D1</th>
    <th></th>
    <th>D2</th>
    <th></th>
    <th>D3</th>
    <th></th>
    <th>D4</th>
    <th></th>
    <th>D5</th>
    <th></th>
    <th>Totaux</th>
    <th></th>
</tr>
</thead>
<tbody>
<tr>
    <td></td>
    <td></td>
    <td>ACADEMIQUE</td>
    <td>PROFETIONNEL</td>
    <td>ACADEMIQUE</td>
    <td>PROFETIONNEL</td>
    <td>ACADEMIQUE</td>
    <td>PROFETIONNEL</td>
    <td>ACADEMIQUE</td>
    <td>PROFETIONNEL</td>
    <td>ACADEMIQUE</td>
    <td>PROFETIONNEL</td>
    <td>ACADEMIQUE</td>
    <td>PROFETIONNEL</td>
    <td></td>
    <td>ACADEMIQUE</td>
    <td>PROFETIONNEL</td>
    <td>ACADEMIQUE</td>
    <td>PROFETIONNEL</td>
    <td>ACADEMIQUE</td>
    <td>PROFETIONNEL</td>
    <td>ACADEMIQUE</td>
    <td>PROFETIONNEL</td>
    <td>ACADEMIQUE</td>
</tr>
<tr>
    <td>UNA</td>
    <td>FLSH</td>
    <td>1605</td>
    <td>537</td>
    <td>763</td>
    <td>287</td>
    <td>601</td>
    <td>207</td>
    <td>122</td>
    <td>34</td>
    <td>175</td>
    <td>48</td>
    <td>99</td>
    <td>19</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>3365</td>
    <td>1132</td>
</tr>
<tr>
    <td></td>
    <td>FSJE</td>
    <td>3523</td>
    <td>1409</td>
    <td>1355</td>
    <td>626</td>
    <td>572</td>
    <td>229</td>
    <td>494</td>
    <td>187</td>
    <td>139</td>
    <td>46</td>
    <td>107</td>
    <td>25</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>6190</td>
    <td>2522</td>
</tr>
<tr>
    <td></td>
    <td>FST</td>
    <td>1723</td>
    <td>567</td>
    <td>1299</td>
    <td>530</td>
    <td>883</td>
    <td>290</td>
    <td>152</td>
    <td>37</td>
    <td>179</td>
    <td>70</td>
    <td>32</td>
    <td>20</td>
    <td>38</td>
    <td>15</td>
    <td>22</td>
    <td>8</td>
    <td>11</td>
    <td>1</td>
    <td>12</td>
    <td>5</td>
    <td>4351</td>
    <td>1543</td>
</tr>
<tr>
    <td></td>
    <td>IUP</td>
    <td>486</td>
    <td>239</td>
    <td>250</td>
    <td>144</td>
    <td>204</td>
    <td>111</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>940</td>
    <td>494</td>
</tr>
<tr>
    <td>USIA</td>
    <td>FLASH</td>
    <td>139</td>
    <td>38</td>
    <td>128</td>
    <td>50</td>
    <td>109</td>
    <td>41</td>
    <td></td>
    <td></td>
    <td>97</td>
    <td>7</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>473</td>
    <td>136</td>
</tr>
<tr>
    <td></td>
    <td>FOE</td>
    <td>177</td>
    <td>108</td>
    <td>113</td>
    <td>69</td>
    <td>140</td>
    <td>91</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>430</td>
    <td>268</td>
</tr>
<tr>
    <td></td>
    <td>FC</td>
    <td>109</td>
    <td>32</td>
    <td>69</td>
    <td>24</td>
    <td>45</td>
    <td>6</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>223</td>
    <td>62</td>
</tr>
<tr>
    <td>ISET</td>
    <td></td>
    <td>594</td>
    <td>312</td>
    <td>337</td>
    <td>211</td>
    <td>364</td>
    <td>226</td>
    <td>71</td>
    <td>46</td>
    <td>52</td>
    <td>31</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>1418</td>
    <td>826</td>
</tr>
<tr>
    <td>ISCAE</td>
    <td></td>
    <td>108</td>
    <td>11</td>
    <td>106</td>
    <td>7</td>
    <td>114</td>
    <td>9</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>328</td>
    <td>27</td>
</tr>
<tr>
    <td>ISERI</td>
    <td></td>
    <td>44</td>
    <td>16</td>
    <td>27</td>
    <td>4</td>
    <td>52</td>
    <td>10</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>123</td>
    <td>30</td>
</tr>
<tr>
    <td>ISPLTI</td>
    <td></td>
    <td>1287</td>
    <td>506</td>
    <td>439</td>
    <td>137</td>
    <td>500</td>
    <td>173</td>
    <td>346</td>
    <td>52</td>
    <td>112</td>
    <td>12</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>2684</td>
    <td>880</td>
</tr>
<tr>
    <td>ISA</td>
    <td></td>
    <td>103</td>
    <td>33</td>
    <td>52</td>
    <td>23</td>
    <td>39</td>
    <td>19</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>194</td>
    <td>75</td>
</tr>
<tr>
    <td>Total</td>
    <td></td>
    <td>9899</td>
    <td>3808</td>
    <td>4938</td>
    <td>2112</td>
    <td>3622</td>
    <td>1412</td>
    <td>1185</td>
    <td>356</td>
    <td>754</td>
    <td>214</td>
    <td>238</td>
    <td>64</td>
    <td>38</td>
    <td>15</td>
    <td>22</td>
    <td>8</td>
    <td>11</td>
    <td>1</td>
    <td>12</td>
    <td>5</td>
    <td>20719</td>
    <td>7995</td>
</tr>
</tbody>
</table>`;
const boursier_formation=`<table class="table table-centered mb-0" id="table1">

<thead class="table-dark">
<tr>
<td colspan="2" rowspan="3">
  <center>INSTITUTIONS</center>
</td>
<th colspan="2">ACADEMIQUE</th>
<th colspan="2">PROFETIONNEL</th>
<th colspan="2">
  <center>Total</center>
</th>
</tr>

<tr>
<td>OUI</td>
<td>NON</td>
<td>OUI</td>
<td>NON</td>
<td>OUI</td>
<td>NON</td>
</tr>
</thead>
<tbody>

<tr>
<td rowspan="5">Université <br> de <br> Nouakchott Asrya</td>
<td>FLSH</td>
<td>3365</td>
<td>1132</td>
<td></td>
<td></td>
<td>3365</td>
<td>1132</td>
</tr>
<tr>

<td>FM</td>
<td>1364</td>
<td>554</td>
<td>93</td>
<td>45</td>
<td>1457</td>
<td>599</td>
</tr>
<tr>

<td>FSJE</td>
<td>6188</td>
<td>2522</td>
<td>2</td>
<td></td>
<td>6190</td>
<td>2522</td>
</tr>
<tr>

<td>FST</td>
<td>4244</td>
<td>1494</td>
<td>107</td>
<td>49</td>
<td>4351</td>
<td>1543</td>
</tr>
<tr>

<td>IUP</td>
<td>939</td>
<td>494</td>
<td>1</td>
<td></td>
<td>940</td>
<td>494</td>
</tr>
<tr>
<td rowspan="3">Université des Sciences Islamiques d’Aioun</td>
<td>FC</td>
<td>473</td>
<td>136</td>
<td></td>
<td></td>
<td>473</td>
<td>136</td>
</tr>
<tr>

<td>FLASH</td>
<td>427</td>
<td>265</td>
<td>3</td>
<td>3</td>
<td>430</td>
<td>268</td>
</tr>
<tr>

<td>FOE</td>
<td>223</td>
<td>62</td>
<td></td>
<td></td>
<td>223</td>
<td>62</td>
</tr>
<tr>
<td rowspan="4">Ecole Supérieure Polytechnique</td>
<td>ESP cycle Ing</td>
<td>139</td>
<td>46</td>
<td></td>
<td></td>
<td>139</td>
<td>46</td>
</tr>

<tr>

<td>IPGE</td>
<td>237</td>
<td>40</td>
<td></td>
<td></td>
<td>237</td>
<td>40</td>
</tr>
<tr>

<td>IS2M</td>
<td>119</td>
<td>23</td>
<td></td>
<td></td>
<td>119</td>
<td>23</td>
</tr>
<tr>

<td>ISMBTPU</td>
<td>265</td>
<td>44</td>
<td></td>
<td></td>
<td>265</td>
<td>44</td>
</tr>
<tr>
<td rowspan="2">Academie Navale</td>
<td>ESO</td>
<td>45</td>
<td></td>
<td></td>
<td></td>
<td>45</td>
<td>0</td>
</tr>
<tr>

<td>ISSM</td>
<td>83</td>
<td>25</td>
<td></td>
<td></td>
<td>83</td>
<td>25</td>
</tr>
<tr>
<td>ENS</td>
<td></td>
<td>592</td>
<td>125</td>
<td></td>
<td></td>
<td>592</td>
<td>125</td>
</tr>
<tr>
<td>ISA</td>
<td></td>
<td>123</td>
<td>30</td>
<td></td>
<td></td>
<td>123</td>
<td>30</td>
</tr>
<tr>
<td>ISCAE</td>
<td></td>
<td>1418</td>
<td>826</td>
<td></td>
<td></td>
<td>1418</td>
<td>826</td>
</tr>
<tr>
<td>ISERI</td>
<td></td>
<td>2558</td>
<td>875</td>
<td>126</td>
<td>5</td>
<td>2684</td>
<td>880</td>
</tr>
<tr>
<td>ISET</td>
<td></td>
<td>328</td>
<td>27</td>
<td></td>
<td></td>
<td>328</td>
<td>27</td>
</tr>
<tr>
<td>ISPLTI</td>
<td></td>
<td>194</td>
<td>75</td>
<td></td>
<td></td>
<td>194</td>
<td>75</td>
</tr>
<tr>
<td>Total général</td>
<td></td>
<td>23324</td>
<td>8795</td>
<td>332</td>
<td>102</td>
<td>23656</td>
<td>8897</td>
</tr>
</tbody>
</table>`;
const genre_niveau=`<table  class="table table-centered mb-0" id="table1">
  <thead class="table-dark"> 
      <tr>
          <th>INSTITUTIONS</th>
          <th></th>
          <th>L1</th>
          <th></th>
          <th>L2</th>
          <th></th>
          <th>L3</th>
          <th></th>
          <th>M1</th>
          <th></th>
          <th>M2</th>
          <th></th>
          <th>D1</th>
          <th></th>
          <th>D2</th>
          <th></th>
          <th>D3</th>
          <th></th>
          <th>D4</th>
          <th></th>
          <th>D5</th>
          <th></th>
          <th>Totaux</th>
          <th></th>
      </tr>
  </thead>
  <tbody>
      <tr>
          <td></td>
          <td></td>
          <td>T</td>
          <td>F</td>
          <td>T</td>
          <td>F</td>
          <td>T</td>
          <td>F</td>
          <td>T</td>
          <td>F</td>
          <td>T</td>
          <td>F</td>
          <td>T</td>
          <td>F</td>
          <td></td>
          <td>T</td>
          <td>F</td>
          <td>T</td>
          <td>F</td>
          <td>T</td>
          <td>F</td>
          <td>T</td>
          <td>F</td>
          <td>T</td>
      </tr>
      <tr>
          <td>UNA</td>
          <td>FLSH</td>
          <td>1605</td>
          <td>537</td>
          <td>763</td>
          <td>287</td>
          <td>601</td>
          <td>207</td>
          <td>122</td>
          <td>34</td>
          <td>175</td>
          <td>48</td>
          <td>99</td>
          <td>19</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>3365</td>
          <td>1132</td>
      </tr>
      <tr>
          <td></td>
          <td>FSJE</td>
          <td>3523</td>
          <td>1409</td>
          <td>1355</td>
          <td>626</td>
          <td>572</td>
          <td>229</td>
          <td>494</td>
          <td>187</td>
          <td>139</td>
          <td>46</td>
          <td>107</td>
          <td>25</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>6190</td>
          <td>2522</td>
      </tr>
      <tr>
          <td></td>
          <td>FST</td>
          <td>1723</td>
          <td>567</td>
          <td>1299</td>
          <td>530</td>
          <td>883</td>
          <td>290</td>
          <td>152</td>
          <td>37</td>
          <td>179</td>
          <td>70</td>
          <td>32</td>
          <td>20</td>
          <td>38</td>
          <td>15</td>
          <td>22</td>
          <td>8</td>
          <td>11</td>
          <td>1</td>
          <td>12</td>
          <td>5</td>
          <td>4351</td>
          <td>1543</td>
      </tr>
      <tr>
          <td></td>
          <td>IUP</td>
          <td>486</td>
          <td>239</td>
          <td>250</td>
          <td>144</td>
          <td>204</td>
          <td>111</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>940</td>
          <td>494</td>
      </tr>
      <tr>
          <td>USIA</td>
          <td>FLASH</td>
          <td>139</td>
          <td>38</td>
          <td>128</td>
          <td>50</td>
          <td>109</td>
          <td>41</td>
          <td></td>
          <td></td>
          <td>97</td>
          <td>7</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>473</td>
          <td>136</td>
      </tr>
      <tr>
          <td></td>
          <td>FOE</td>
          <td>177</td>
          <td>108</td>
          <td>113</td>
          <td>69</td>
          <td>140</td>
          <td>91</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>430</td>
          <td>268</td>
      </tr>
      <tr>
          <td></td>
          <td>FC</td>
          <td>109</td>
          <td>32</td>
          <td>69</td>
          <td>24</td>
          <td>45</td>
          <td>6</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>223</td>
          <td>62</td>
      </tr>
      <tr>
          <td>ISET</td>
          <td></td>
          <td>594</td>
          <td>312</td>
          <td>337</td>
          <td>211</td>
          <td>364</td>
          <td>226</td>
          <td>71</td>
          <td>46</td>
          <td>52</td>
          <td>31</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>1418</td>
          <td>826</td>
      </tr>
      <tr>
          <td>ISCAE</td>
          <td></td>
          <td>108</td>
          <td>11</td>
          <td>106</td>
          <td>7</td>
          <td>114</td>
          <td>9</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>328</td>
          <td>27</td>
      </tr>
      <tr>
          <td>ISERI</td>
          <td></td>
          <td>44</td>
          <td>16</td>
          <td>27</td>
          <td>4</td>
          <td>52</td>
          <td>10</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>123</td>
          <td>30</td>
      </tr>
      <tr>
          <td>ISPLTI</td>
          <td></td>
          <td>1287</td>
          <td>506</td>
          <td>439</td>
          <td>137</td>
          <td>500</td>
          <td>173</td>
          <td>346</td>
          <td>52</td>
          <td>112</td>
          <td>12</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>2684</td>
          <td>880</td>
      </tr>
      <tr>
          <td>ISA</td>
          <td></td>
          <td>103</td>
          <td>33</td>
          <td>52</td>
          <td>23</td>
          <td>39</td>
          <td>19</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>194</td>
          <td>75</td>
      </tr>
      <tr>
          <td>Total</td>
          <td></td>
          <td>9899</td>
          <td>3808</td>
          <td>4938</td>
          <td>2112</td>
          <td>3622</td>
          <td>1412</td>
          <td>1185</td>
          <td>356</td>
          <td>754</td>
          <td>214</td>
          <td>238</td>
          <td>64</td>
          <td>38</td>
          <td>15</td>
          <td>22</td>
          <td>8</td>
          <td>11</td>
          <td>1</td>
          <td>12</td>
          <td>5</td>
          <td>20719</td>
          <td>7995</td>
      </tr>
  </tbody>
</table>`;
const transfere_formation=`<table class="table table-centered mb-0" id="table1">

  <thead class="table-dark">
    <tr>
      <td colspan="2" rowspan="3">
        <center>INSTITUTIONS</center>
      </td>
      <th colspan="2">ACADEMIQUE</th>
      <th colspan="2">PROFETIONNEL</th>
      <th colspan="2">
        <center>Total</center>
      </th>
    </tr>

    <tr>
      <td>OUI</td>
      <td>NON</td>
      <td>OUI</td>
      <td>NON</td>
      <td>OUI</td>
      <td>NON</td>
    </tr>
  </thead>
  <tbody>

    <tr>
      <td rowspan="5">Université <br> de <br> Nouakchott Asrya</td>
      <td>FLSH</td>
      <td>3365</td>
      <td>1132</td>
      <td></td>
      <td></td>
      <td>3365</td>
      <td>1132</td>
    </tr>
    <tr>

      <td>FM</td>
      <td>1364</td>
      <td>554</td>
      <td>93</td>
      <td>45</td>
      <td>1457</td>
      <td>599</td>
    </tr>
    <tr>

      <td>FSJE</td>
      <td>6188</td>
      <td>2522</td>
      <td>2</td>
      <td></td>
      <td>6190</td>
      <td>2522</td>
    </tr>
    <tr>

      <td>FST</td>
      <td>4244</td>
      <td>1494</td>
      <td>107</td>
      <td>49</td>
      <td>4351</td>
      <td>1543</td>
    </tr>
    <tr>

      <td>IUP</td>
      <td>939</td>
      <td>494</td>
      <td>1</td>
      <td></td>
      <td>940</td>
      <td>494</td>
    </tr>
    <tr>
      <td rowspan="3">Université des Sciences Islamiques d’Aioun</td>
      <td>FC</td>
      <td>473</td>
      <td>136</td>
      <td></td>
      <td></td>
      <td>473</td>
      <td>136</td>
    </tr>
    <tr>

      <td>FLASH</td>
      <td>427</td>
      <td>265</td>
      <td>3</td>
      <td>3</td>
      <td>430</td>
      <td>268</td>
    </tr>
    <tr>

      <td>FOE</td>
      <td>223</td>
      <td>62</td>
      <td></td>
      <td></td>
      <td>223</td>
      <td>62</td>
    </tr>
    <tr>
      <td rowspan="4">Ecole Supérieure Polytechnique</td>
      <td>ESP cycle Ing</td>
      <td>139</td>
      <td>46</td>
      <td></td>
      <td></td>
      <td>139</td>
      <td>46</td>
    </tr>

    <tr>

      <td>IPGE</td>
      <td>237</td>
      <td>40</td>
      <td></td>
      <td></td>
      <td>237</td>
      <td>40</td>
    </tr>
    <tr>

      <td>IS2M</td>
      <td>119</td>
      <td>23</td>
      <td></td>
      <td></td>
      <td>119</td>
      <td>23</td>
    </tr>
    <tr>

      <td>ISMBTPU</td>
      <td>265</td>
      <td>44</td>
      <td></td>
      <td></td>
      <td>265</td>
      <td>44</td>
    </tr>
    <tr>
      <td rowspan="2">Academie Navale</td>
      <td>ESO</td>
      <td>45</td>
      <td></td>
      <td></td>
      <td></td>
      <td>45</td>
      <td>0</td>
    </tr>
    <tr>

      <td>ISSM</td>
      <td>83</td>
      <td>25</td>
      <td></td>
      <td></td>
      <td>83</td>
      <td>25</td>
    </tr>
    <tr>
      <td>ENS</td>
      <td></td>
      <td>592</td>
      <td>125</td>
      <td></td>
      <td></td>
      <td>592</td>
      <td>125</td>
    </tr>
    <tr>
      <td>ISA</td>
      <td></td>
      <td>123</td>
      <td>30</td>
      <td></td>
      <td></td>
      <td>123</td>
      <td>30</td>
    </tr>
    <tr>
      <td>ISCAE</td>
      <td></td>
      <td>1418</td>
      <td>826</td>
      <td></td>
      <td></td>
      <td>1418</td>
      <td>826</td>
    </tr>
    <tr>
      <td>ISERI</td>
      <td></td>
      <td>2558</td>
      <td>875</td>
      <td>126</td>
      <td>5</td>
      <td>2684</td>
      <td>880</td>
    </tr>
    <tr>
      <td>ISET</td>
      <td></td>
      <td>328</td>
      <td>27</td>
      <td></td>
      <td></td>
      <td>328</td>
      <td>27</td>
    </tr>
    <tr>
      <td>ISPLTI</td>
      <td></td>
      <td>194</td>
      <td>75</td>
      <td></td>
      <td></td>
      <td>194</td>
      <td>75</td>
    </tr>
    <tr>
      <td>Total général</td>
      <td></td>
      <td>23324</td>
      <td>8795</td>
      <td>332</td>
      <td>102</td>
      <td>23656</td>
      <td>8897</td>
    </tr>
  </tbody>
</table>`;
const formation_nationalité=`<table class="table table-centered mb-0" id="table1">

<thead class="table-dark">
<tr>
  <td colspan="2" rowspan="3">
    <center>INSTITUTIONS</center>
  </td>
  
  <th colspan="2">ETRANGERS</th>
  <th colspan="2">NATIONAUX</th>
  <th colspan="2">
    <center>Total</center>
  </th>
</tr>

<tr>
   
  <td>ACADEMIQUE</td>
    <td>PROFETIONNEL</td>
    <td>ACADEMIQUE</td>
    <td>PROFETIONNEL</td>
    <td>ACADEMIQUE</td>
    <td>PROFETIONNEL</td>
</tr>
</thead>
<tbody>

<tr>
  <td rowspan="5">Université <br> de <br> Nouakchott Asrya</td>
  <td>FLSH</td>
  <td>3365</td>
  <td>1132</td>
  <td></td>
  <td></td>
  <td>3365</td>
  <td>1132</td>
</tr>
<tr>

  <td>FM</td>
  <td>1364</td>
  <td>554</td>
  <td>93</td>
  <td>45</td>
  <td>1457</td>
  <td>599</td>
</tr>
<tr>

  <td>FSJE</td>
  <td>6188</td>
  <td>2522</td>
  <td>2</td>
  <td></td>
  <td>6190</td>
  <td>2522</td>
</tr>
<tr>

  <td>FST</td>
  <td>4244</td>
  <td>1494</td>
  <td>107</td>
  <td>49</td>
  <td>4351</td>
  <td>1543</td>
</tr>
<tr>

  <td>IUP</td>
  <td>939</td>
  <td>494</td>
  <td>1</td>
  <td></td>
  <td>940</td>
  <td>494</td>
</tr>
<tr>
  <td rowspan="3">Université des Sciences Islamiques d’Aioun</td>
  <td>FC</td>
  <td>473</td>
  <td>136</td>
  <td></td>
  <td></td>
  <td>473</td>
  <td>136</td>
</tr>
<tr>

  <td>FLASH</td>
  <td>427</td>
  <td>265</td>
  <td>3</td>
  <td>3</td>
  <td>430</td>
  <td>268</td>
</tr>
<tr>

  <td>FOE</td>
  <td>223</td>
  <td>62</td>
  <td></td>
  <td></td>
  <td>223</td>
  <td>62</td>
</tr>
<tr>
  <td rowspan="4">Ecole Supérieure Polytechnique</td>
  <td>ESP cycle Ing</td>
  <td>139</td>
  <td>46</td>
  <td></td>
  <td></td>
  <td>139</td>
  <td>46</td>
</tr>

<tr>

  <td>IPGE</td>
  <td>237</td>
  <td>40</td>
  <td></td>
  <td></td>
  <td>237</td>
  <td>40</td>
</tr>
<tr>

  <td>IS2M</td>
  <td>119</td>
  <td>23</td>
  <td></td>
  <td></td>
  <td>119</td>
  <td>23</td>
</tr>
<tr>

  <td>ISMBTPU</td>
  <td>265</td>
  <td>44</td>
  <td></td>
  <td></td>
  <td>265</td>
  <td>44</td>
</tr>
<tr>
  <td rowspan="2">Academie Navale</td>
  <td>ESO</td>
  <td>45</td>
  <td></td>
  <td></td>
  <td></td>
  <td>45</td>
  <td>0</td>
</tr>
<tr>

  <td>ISSM</td>
  <td>83</td>
  <td>25</td>
  <td></td>
  <td></td>
  <td>83</td>
  <td>25</td>
</tr>
<tr>
  <td>ENS</td>
  <td></td>
  <td>592</td>
  <td>125</td>
  <td></td>
  <td></td>
  <td>592</td>
  <td>125</td>
</tr>
<tr>
  <td>ISA</td>
  <td></td>
  <td>123</td>
  <td>30</td>
  <td></td>
  <td></td>
  <td>123</td>
  <td>30</td>
</tr>
<tr>
  <td>ISCAE</td>
  <td></td>
  <td>1418</td>
  <td>826</td>
  <td></td>
  <td></td>
  <td>1418</td>
  <td>826</td>
</tr>
<tr>
  <td>ISERI</td>
  <td></td>
  <td>2558</td>
  <td>875</td>
  <td>126</td>
  <td>5</td>
  <td>2684</td>
  <td>880</td>
</tr>
<tr>
  <td>ISET</td>
  <td></td>
  <td>328</td>
  <td>27</td>
  <td></td>
  <td></td>
  <td>328</td>
  <td>27</td>
</tr>
<tr>
  <td>ISPLTI</td>
  <td></td>
  <td>194</td>
  <td>75</td>
  <td></td>
  <td></td>
  <td>194</td>
  <td>75</td>
</tr>
<tr>
  <td>Total général</td>
  <td></td>
  <td>23324</td>
  <td>8795</td>
  <td>332</td>
  <td>102</td>
  <td>23656</td>
  <td>8897</td>
</tr>
</tbody>
</table> `;
const Formation_lg_formation=`<table class="table table-centered mb-0" id="table1">

<thead class="table-dark">
<tr>
  <td colspan="2" rowspan="3">
    <center>INSTITUTIONS</center>
  </td>
  
  <th colspan="2">ACADEMIQUE</th>
  <th colspan="2">PROFETIONNEL</th>
  <th colspan="2">
    <center>Total</center>
  </th>
</tr>

<tr>
   
  <td>Anglais</td>
    <td>Francais</td>
    <td>Anglais</td>
    <td>Francais</td>
    <td>Anglais</td>
    <td>Francais</td>
</tr>
</thead>
<tbody>

<tr>
  <td rowspan="5">Université <br> de <br> Nouakchott Asrya</td>
  <td>FLSH</td>
  <td>3365</td>
  <td>1132</td>
  <td></td>
  <td></td>
  <td>3365</td>
  <td>1132</td>
</tr>
<tr>

  <td>FM</td>
  <td>1364</td>
  <td>554</td>
  <td>93</td>
  <td>45</td>
  <td>1457</td>
  <td>599</td>
</tr>
<tr>

  <td>FSJE</td>
  <td>6188</td>
  <td>2522</td>
  <td>2</td>
  <td></td>
  <td>6190</td>
  <td>2522</td>
</tr>
<tr>

  <td>FST</td>
  <td>4244</td>
  <td>1494</td>
  <td>107</td>
  <td>49</td>
  <td>4351</td>
  <td>1543</td>
</tr>
<tr>

  <td>IUP</td>
  <td>939</td>
  <td>494</td>
  <td>1</td>
  <td></td>
  <td>940</td>
  <td>494</td>
</tr>
<tr>
  <td rowspan="3">Université des Sciences Islamiques d’Aioun</td>
  <td>FC</td>
  <td>473</td>
  <td>136</td>
  <td></td>
  <td></td>
  <td>473</td>
  <td>136</td>
</tr>
<tr>

  <td>FLASH</td>
  <td>427</td>
  <td>265</td>
  <td>3</td>
  <td>3</td>
  <td>430</td>
  <td>268</td>
</tr>
<tr>

  <td>FOE</td>
  <td>223</td>
  <td>62</td>
  <td></td>
  <td></td>
  <td>223</td>
  <td>62</td>
</tr>
<tr>
  <td rowspan="4">Ecole Supérieure Polytechnique</td>
  <td>ESP cycle Ing</td>
  <td>139</td>
  <td>46</td>
  <td></td>
  <td></td>
  <td>139</td>
  <td>46</td>
</tr>

<tr>

  <td>IPGE</td>
  <td>237</td>
  <td>40</td>
  <td></td>
  <td></td>
  <td>237</td>
  <td>40</td>
</tr>
<tr>

  <td>IS2M</td>
  <td>119</td>
  <td>23</td>
  <td></td>
  <td></td>
  <td>119</td>
  <td>23</td>
</tr>
<tr>

  <td>ISMBTPU</td>
  <td>265</td>
  <td>44</td>
  <td></td>
  <td></td>
  <td>265</td>
  <td>44</td>
</tr>
<tr>
  <td rowspan="2">Academie Navale</td>
  <td>ESO</td>
  <td>45</td>
  <td></td>
  <td></td>
  <td></td>
  <td>45</td>
  <td>0</td>
</tr>
<tr>

  <td>ISSM</td>
  <td>83</td>
  <td>25</td>
  <td></td>
  <td></td>
  <td>83</td>
  <td>25</td>
</tr>
<tr>
  <td>ENS</td>
  <td></td>
  <td>592</td>
  <td>125</td>
  <td></td>
  <td></td>
  <td>592</td>
  <td>125</td>
</tr>
<tr>
  <td>ISA</td>
  <td></td>
  <td>123</td>
  <td>30</td>
  <td></td>
  <td></td>
  <td>123</td>
  <td>30</td>
</tr>
<tr>
  <td>ISCAE</td>
  <td></td>
  <td>1418</td>
  <td>826</td>
  <td></td>
  <td></td>
  <td>1418</td>
  <td>826</td>
</tr>
<tr>
  <td>ISERI</td>
  <td></td>
  <td>2558</td>
  <td>875</td>
  <td>126</td>
  <td>5</td>
  <td>2684</td>
  <td>880</td>
</tr>
<tr>
  <td>ISET</td>
  <td></td>
  <td>328</td>
  <td>27</td>
  <td></td>
  <td></td>
  <td>328</td>
  <td>27</td>
</tr>
<tr>
  <td>ISPLTI</td>
  <td></td>
  <td>194</td>
  <td>75</td>
  <td></td>
  <td></td>
  <td>194</td>
  <td>75</td>
</tr>
<tr>
  <td>Total général</td>
  <td></td>
  <td>23324</td>
  <td>8795</td>
  <td>332</td>
  <td>102</td>
  <td>23656</td>
  <td>8897</td>
</tr>
</tbody>
</table>`;
const Redoublant_boursier=`<table class="table table-centered mb-0" id="table1">

<thead class="table-dark">
<tr>
  <td colspan="2" rowspan="3">
    <center>INSTITUTIONS</center>
  </td>
  <td colspan="2" >
    <center>Redoublant</center>
  </td> 
  
  
  <th colspan="2">OUI</th>
  <th colspan="2">NON</th>
  <th colspan="2">
    <center>Total</center>
  </th>
</tr>

<tr>
  <td colspan="2" rowspan="2">
    <center>Boursier</center>
  </td> 
  <td>OUI</td>
    <td>NON</td>
    <td>OUI</td>
    <td>NON</td>
    <td>OUI</td>
    <td>NON</td>
   
</tr>
</thead>
<tbody>

<tr>
  <td rowspan="5">Université <br> de <br> Nouakchott Asrya</td>
  <td>FLSH</td>
  <td>3365</td>
  <td>1132</td>
  <td></td>
  <td></td>
  <td>3365</td>
  <td>1132</td>
</tr>
<tr>

  <td>FM</td>
  <td>1364</td>
  <td>554</td>
  <td>93</td>
  <td>45</td>
  <td>1457</td>
  <td>599</td>
</tr>
<tr>

  <td>FSJE</td>
  <td>6188</td>
  <td>2522</td>
  <td>2</td>
  <td></td>
  <td>6190</td>
  <td>2522</td>
</tr>
<tr>

  <td>FST</td>
  <td>4244</td>
  <td>1494</td>
  <td>107</td>
  <td>49</td>
  <td>4351</td>
  <td>1543</td>
</tr>
<tr>

  <td>IUP</td>
  <td>939</td>
  <td>494</td>
  <td>1</td>
  <td></td>
  <td>940</td>
  <td>494</td>
</tr>
<tr>
  <td rowspan="3">Université des Sciences Islamiques d’Aioun</td>
  <td>FC</td>
  <td>473</td>
  <td>136</td>
  <td></td>
  <td></td>
  <td>473</td>
  <td>136</td>
</tr>
<tr>

  <td>FLASH</td>
  <td>427</td>
  <td>265</td>
  <td>3</td>
  <td>3</td>
  <td>430</td>
  <td>268</td>
</tr>
<tr>

  <td>FOE</td>
  <td>223</td>
  <td>62</td>
  <td></td>
  <td></td>
  <td>223</td>
  <td>62</td>
</tr>
<tr>
  <td rowspan="4">Ecole Supérieure Polytechnique</td>
  <td>ESP cycle Ing</td>
  <td>139</td>
  <td>46</td>
  <td></td>
  <td></td>
  <td>139</td>
  <td>46</td>
</tr>

<tr>

  <td>IPGE</td>
  <td>237</td>
  <td>40</td>
  <td></td>
  <td></td>
  <td>237</td>
  <td>40</td>
</tr>
<tr>

  <td>IS2M</td>
  <td>119</td>
  <td>23</td>
  <td></td>
  <td></td>
  <td>119</td>
  <td>23</td>
</tr>
<tr>

  <td>ISMBTPU</td>
  <td>265</td>
  <td>44</td>
  <td></td>
  <td></td>
  <td>265</td>
  <td>44</td>
</tr>
<tr>
  <td rowspan="2">Academie Navale</td>
  <td>ESO</td>
  <td>45</td>
  <td></td>
  <td></td>
  <td></td>
  <td>45</td>
  <td>0</td>
</tr>
<tr>

  <td>ISSM</td>
  <td>83</td>
  <td>25</td>
  <td></td>
  <td></td>
  <td>83</td>
  <td>25</td>
</tr>
<tr>
  <td>ENS</td>
  <td></td>
  <td>592</td>
  <td>125</td>
  <td></td>
  <td></td>
  <td>592</td>
  <td>125</td>
</tr>
<tr>
  <td>ISA</td>
  <td></td>
  <td>123</td>
  <td>30</td>
  <td></td>
  <td></td>
  <td>123</td>
  <td>30</td>
</tr>
<tr>
  <td>ISCAE</td>
  <td></td>
  <td>1418</td>
  <td>826</td>
  <td></td>
  <td></td>
  <td>1418</td>
  <td>826</td>
</tr>
<tr>
  <td>ISERI</td>
  <td></td>
  <td>2558</td>
  <td>875</td>
  <td>126</td>
  <td>5</td>
  <td>2684</td>
  <td>880</td>
</tr>
<tr>
  <td>ISET</td>
  <td></td>
  <td>328</td>
  <td>27</td>
  <td></td>
  <td></td>
  <td>328</td>
  <td>27</td>
</tr>
<tr>
  <td>ISPLTI</td>
  <td></td>
  <td>194</td>
  <td>75</td>
  <td></td>
  <td></td>
  <td>194</td>
  <td>75</td>
</tr>
<tr>
  <td>Total général</td>
  <td></td>
  <td>23324</td>
  <td>8795</td>
  <td>332</td>
  <td>102</td>
  <td>23656</td>
  <td>8897</td>
</tr>
</tbody>
</table>`;
const redoublant_transfere=`
<table class="table table-centered mb-0" id="table1">

<thead class="table-dark">
<tr>
  <td colspan="2" rowspan="3">
    <center>INSTITUTIONS</center>
  </td>
  <td colspan="2" >
    <center>Transfere</center>
  </td> 
  
  
  <th colspan="2">OUI</th>
  <th colspan="2">NON</th>
  <th colspan="2">
    <center>Total</center>
  </th>
</tr>

<tr>
  <td colspan="2" rowspan="2">
    <center>redoublant</center>
  </td> 
  <td>OUI</td>
    <td>NON</td>
    <td>OUI</td>
    <td>NON</td>
    <td>OUI</td>
    <td>NON</td>
   
</tr>
</thead>
<tbody>

<tr>
  <td rowspan="5">Université <br> de <br> Nouakchott Asrya</td>
  <td>FLSH</td>
  <td>3365</td>
  <td>1132</td>
  <td></td>
  <td></td>
  <td>3365</td>
  <td>1132</td>
</tr>
<tr>

  <td>FM</td>
  <td>1364</td>
  <td>554</td>
  <td>93</td>
  <td>45</td>
  <td>1457</td>
  <td>599</td>
</tr>
<tr>

  <td>FSJE</td>
  <td>6188</td>
  <td>2522</td>
  <td>2</td>
  <td></td>
  <td>6190</td>
  <td>2522</td>
</tr>
<tr>

  <td>FST</td>
  <td>4244</td>
  <td>1494</td>
  <td>107</td>
  <td>49</td>
  <td>4351</td>
  <td>1543</td>
</tr>
<tr>

  <td>IUP</td>
  <td>939</td>
  <td>494</td>
  <td>1</td>
  <td></td>
  <td>940</td>
  <td>494</td>
</tr>
<tr>
  <td rowspan="3">Université des Sciences Islamiques d’Aioun</td>
  <td>FC</td>
  <td>473</td>
  <td>136</td>
  <td></td>
  <td></td>
  <td>473</td>
  <td>136</td>
</tr>
<tr>

  <td>FLASH</td>
  <td>427</td>
  <td>265</td>
  <td>3</td>
  <td>3</td>
  <td>430</td>
  <td>268</td>
</tr>
<tr>

  <td>FOE</td>
  <td>223</td>
  <td>62</td>
  <td></td>
  <td></td>
  <td>223</td>
  <td>62</td>
</tr>
<tr>
  <td rowspan="4">Ecole Supérieure Polytechnique</td>
  <td>ESP cycle Ing</td>
  <td>139</td>
  <td>46</td>
  <td></td>
  <td></td>
  <td>139</td>
  <td>46</td>
</tr>

<tr>

  <td>IPGE</td>
  <td>237</td>
  <td>40</td>
  <td></td>
  <td></td>
  <td>237</td>
  <td>40</td>
</tr>
<tr>

  <td>IS2M</td>
  <td>119</td>
  <td>23</td>
  <td></td>
  <td></td>
  <td>119</td>
  <td>23</td>
</tr>
<tr>

  <td>ISMBTPU</td>
  <td>265</td>
  <td>44</td>
  <td></td>
  <td></td>
  <td>265</td>
  <td>44</td>
</tr>
<tr>
  <td rowspan="2">Academie Navale</td>
  <td>ESO</td>
  <td>45</td>
  <td></td>
  <td></td>
  <td></td>
  <td>45</td>
  <td>0</td>
</tr>
<tr>

  <td>ISSM</td>
  <td>83</td>
  <td>25</td>
  <td></td>
  <td></td>
  <td>83</td>
  <td>25</td>
</tr>
<tr>
  <td>ENS</td>
  <td></td>
  <td>592</td>
  <td>125</td>
  <td></td>
  <td></td>
  <td>592</td>
  <td>125</td>
</tr>
<tr>
  <td>ISA</td>
  <td></td>
  <td>123</td>
  <td>30</td>
  <td></td>
  <td></td>
  <td>123</td>
  <td>30</td>
</tr>
<tr>
  <td>ISCAE</td>
  <td></td>
  <td>1418</td>
  <td>826</td>
  <td></td>
  <td></td>
  <td>1418</td>
  <td>826</td>
</tr>
<tr>
  <td>ISERI</td>
  <td></td>
  <td>2558</td>
  <td>875</td>
  <td>126</td>
  <td>5</td>
  <td>2684</td>
  <td>880</td>
</tr>
<tr>
  <td>ISET</td>
  <td></td>
  <td>328</td>
  <td>27</td>
  <td></td>
  <td></td>
  <td>328</td>
  <td>27</td>
</tr>
<tr>
  <td>ISPLTI</td>
  <td></td>
  <td>194</td>
  <td>75</td>
  <td></td>
  <td></td>
  <td>194</td>
  <td>75</td>
</tr>
<tr>
  <td>Total général</td>
  <td></td>
  <td>23324</td>
  <td>8795</td>
  <td>332</td>
  <td>102</td>
  <td>23656</td>
  <td>8897</td>
</tr>
</tbody>
</table>`;
const redoublant_nationalité=`<table class="table table-centered mb-0" id="table1">

<thead class="table-dark">
<tr>
  <td colspan="2" rowspan="3">
    <center>INSTITUTIONS</center>
  </td>
  
  
  
  <th colspan="2">ETRANGERS</th>
  <th colspan="2">NATIONAUX</th>
  <th colspan="2">
    <center>Total</center>
  </th>
</tr>

<tr>

  <td>OUI</td>
    <td>NON</td>
    <td>OUI</td>
    <td>NON</td>
    <td>OUI</td>
    <td>NON</td>
   
</tr>
</thead>
<tbody>

<tr>
  <td rowspan="5">Université <br> de <br> Nouakchott Asrya</td>
  <td>FLSH</td>
  <td>3365</td>
  <td>1132</td>
  <td></td>
  <td></td>
  <td>3365</td>
  <td>1132</td>
</tr>
<tr>

  <td>FM</td>
  <td>1364</td>
  <td>554</td>
  <td>93</td>
  <td>45</td>
  <td>1457</td>
  <td>599</td>
</tr>
<tr>

  <td>FSJE</td>
  <td>6188</td>
  <td>2522</td>
  <td>2</td>
  <td></td>
  <td>6190</td>
  <td>2522</td>
</tr>
<tr>

  <td>FST</td>
  <td>4244</td>
  <td>1494</td>
  <td>107</td>
  <td>49</td>
  <td>4351</td>
  <td>1543</td>
</tr>
<tr>

  <td>IUP</td>
  <td>939</td>
  <td>494</td>
  <td>1</td>
  <td></td>
  <td>940</td>
  <td>494</td>
</tr>
<tr>
  <td rowspan="3">Université des Sciences Islamiques d’Aioun</td>
  <td>FC</td>
  <td>473</td>
  <td>136</td>
  <td></td>
  <td></td>
  <td>473</td>
  <td>136</td>
</tr>
<tr>

  <td>FLASH</td>
  <td>427</td>
  <td>265</td>
  <td>3</td>
  <td>3</td>
  <td>430</td>
  <td>268</td>
</tr>
<tr>

  <td>FOE</td>
  <td>223</td>
  <td>62</td>
  <td></td>
  <td></td>
  <td>223</td>
  <td>62</td>
</tr>
<tr>
  <td rowspan="4">Ecole Supérieure Polytechnique</td>
  <td>ESP cycle Ing</td>
  <td>139</td>
  <td>46</td>
  <td></td>
  <td></td>
  <td>139</td>
  <td>46</td>
</tr>

<tr>

  <td>IPGE</td>
  <td>237</td>
  <td>40</td>
  <td></td>
  <td></td>
  <td>237</td>
  <td>40</td>
</tr>
<tr>

  <td>IS2M</td>
  <td>119</td>
  <td>23</td>
  <td></td>
  <td></td>
  <td>119</td>
  <td>23</td>
</tr>
<tr>

  <td>ISMBTPU</td>
  <td>265</td>
  <td>44</td>
  <td></td>
  <td></td>
  <td>265</td>
  <td>44</td>
</tr>
<tr>
  <td rowspan="2">Academie Navale</td>
  <td>ESO</td>
  <td>45</td>
  <td></td>
  <td></td>
  <td></td>
  <td>45</td>
  <td>0</td>
</tr>
<tr>

  <td>ISSM</td>
  <td>83</td>
  <td>25</td>
  <td></td>
  <td></td>
  <td>83</td>
  <td>25</td>
</tr>
<tr>
  <td>ENS</td>
  <td></td>
  <td>592</td>
  <td>125</td>
  <td></td>
  <td></td>
  <td>592</td>
  <td>125</td>
</tr>
<tr>
  <td>ISA</td>
  <td></td>
  <td>123</td>
  <td>30</td>
  <td></td>
  <td></td>
  <td>123</td>
  <td>30</td>
</tr>
<tr>
  <td>ISCAE</td>
  <td></td>
  <td>1418</td>
  <td>826</td>
  <td></td>
  <td></td>
  <td>1418</td>
  <td>826</td>
</tr>
<tr>
  <td>ISERI</td>
  <td></td>
  <td>2558</td>
  <td>875</td>
  <td>126</td>
  <td>5</td>
  <td>2684</td>
  <td>880</td>
</tr>
<tr>
  <td>ISET</td>
  <td></td>
  <td>328</td>
  <td>27</td>
  <td></td>
  <td></td>
  <td>328</td>
  <td>27</td>
</tr>
<tr>
  <td>ISPLTI</td>
  <td></td>
  <td>194</td>
  <td>75</td>
  <td></td>
  <td></td>
  <td>194</td>
  <td>75</td>
</tr>
<tr>
  <td>Total général</td>
  <td></td>
  <td>23324</td>
  <td>8795</td>
  <td>332</td>
  <td>102</td>
  <td>23656</td>
  <td>8897</td>
</tr>
</tbody>
</table>`;
const redoublant_lg__formation=`
<table class="table table-centered mb-0" id="table1">

<thead class="table-dark">
<tr>
  <td colspan="2" rowspan="3">
    <center>INSTITUTIONS</center>
  </td>
  
  
  
  <th colspan="2">Anglais</th>
  <th colspan="2">Francais</th>
  <th colspan="2">
    <center>Total</center>
  </th>
</tr>

<tr>

  <td>OUI</td>
    <td>NON</td>
    <td>OUI</td>
    <td>NON</td>
    <td>OUI</td>
    <td>NON</td>
   
</tr>
</thead>
<tbody>

<tr>
  <td rowspan="5">Université <br> de <br> Nouakchott Asrya</td>
  <td>FLSH</td>
  <td>3365</td>
  <td>1132</td>
  <td></td>
  <td></td>
  <td>3365</td>
  <td>1132</td>
</tr>
<tr>

  <td>FM</td>
  <td>1364</td>
  <td>554</td>
  <td>93</td>
  <td>45</td>
  <td>1457</td>
  <td>599</td>
</tr>
<tr>

  <td>FSJE</td>
  <td>6188</td>
  <td>2522</td>
  <td>2</td>
  <td></td>
  <td>6190</td>
  <td>2522</td>
</tr>
<tr>

  <td>FST</td>
  <td>4244</td>
  <td>1494</td>
  <td>107</td>
  <td>49</td>
  <td>4351</td>
  <td>1543</td>
</tr>
<tr>

  <td>IUP</td>
  <td>939</td>
  <td>494</td>
  <td>1</td>
  <td></td>
  <td>940</td>
  <td>494</td>
</tr>
<tr>
  <td rowspan="3">Université des Sciences Islamiques d’Aioun</td>
  <td>FC</td>
  <td>473</td>
  <td>136</td>
  <td></td>
  <td></td>
  <td>473</td>
  <td>136</td>
</tr>
<tr>

  <td>FLASH</td>
  <td>427</td>
  <td>265</td>
  <td>3</td>
  <td>3</td>
  <td>430</td>
  <td>268</td>
</tr>
<tr>

  <td>FOE</td>
  <td>223</td>
  <td>62</td>
  <td></td>
  <td></td>
  <td>223</td>
  <td>62</td>
</tr>
<tr>
  <td rowspan="4">Ecole Supérieure Polytechnique</td>
  <td>ESP cycle Ing</td>
  <td>139</td>
  <td>46</td>
  <td></td>
  <td></td>
  <td>139</td>
  <td>46</td>
</tr>

<tr>

  <td>IPGE</td>
  <td>237</td>
  <td>40</td>
  <td></td>
  <td></td>
  <td>237</td>
  <td>40</td>
</tr>
<tr>

  <td>IS2M</td>
  <td>119</td>
  <td>23</td>
  <td></td>
  <td></td>
  <td>119</td>
  <td>23</td>
</tr>
<tr>

  <td>ISMBTPU</td>
  <td>265</td>
  <td>44</td>
  <td></td>
  <td></td>
  <td>265</td>
  <td>44</td>
</tr>
<tr>
  <td rowspan="2">Academie Navale</td>
  <td>ESO</td>
  <td>45</td>
  <td></td>
  <td></td>
  <td></td>
  <td>45</td>
  <td>0</td>
</tr>
<tr>

  <td>ISSM</td>
  <td>83</td>
  <td>25</td>
  <td></td>
  <td></td>
  <td>83</td>
  <td>25</td>
</tr>
<tr>
  <td>ENS</td>
  <td></td>
  <td>592</td>
  <td>125</td>
  <td></td>
  <td></td>
  <td>592</td>
  <td>125</td>
</tr>
<tr>
  <td>ISA</td>
  <td></td>
  <td>123</td>
  <td>30</td>
  <td></td>
  <td></td>
  <td>123</td>
  <td>30</td>
</tr>
<tr>
  <td>ISCAE</td>
  <td></td>
  <td>1418</td>
  <td>826</td>
  <td></td>
  <td></td>
  <td>1418</td>
  <td>826</td>
</tr>
<tr>
  <td>ISERI</td>
  <td></td>
  <td>2558</td>
  <td>875</td>
  <td>126</td>
  <td>5</td>
  <td>2684</td>
  <td>880</td>
</tr>
<tr>
  <td>ISET</td>
  <td></td>
  <td>328</td>
  <td>27</td>
  <td></td>
  <td></td>
  <td>328</td>
  <td>27</td>
</tr>
<tr>
  <td>ISPLTI</td>
  <td></td>
  <td>194</td>
  <td>75</td>
  <td></td>
  <td></td>
  <td>194</td>
  <td>75</td>
</tr>
<tr>
  <td>Total général</td>
  <td></td>
  <td>23324</td>
  <td>8795</td>
  <td>332</td>
  <td>102</td>
  <td>23656</td>
  <td>8897</td>
</tr>
</tbody>
</table>`;
const  boursier_transfere=`<table class="table table-centered mb-0" id="table1">

<thead class="table-dark">
<tr>
  <td colspan="2" rowspan="3">
    <center>INSTITUTIONS</center>
  </td>
  <td colspan="2" >
    <center>Transfere</center>
  </td> 
  
  
  <th colspan="2">OUI</th>
  <th colspan="2">NON</th>
  <th colspan="2">
    <center>Total</center>
  </th>
</tr>

<tr>
  <td colspan="2" rowspan="2">
    <center>Boursier</center>
  </td> 
  <td>OUI</td>
    <td>NON</td>
    <td>OUI</td>
    <td>NON</td>
    <td>OUI</td>
    <td>NON</td>
   
</tr>
</thead>
<tbody>

<tr>
  <td rowspan="5">Université <br> de <br> Nouakchott Asrya</td>
  <td>FLSH</td>
  <td>3365</td>
  <td>1132</td>
  <td></td>
  <td></td>
  <td>3365</td>
  <td>1132</td>
</tr>
<tr>

  <td>FM</td>
  <td>1364</td>
  <td>554</td>
  <td>93</td>
  <td>45</td>
  <td>1457</td>
  <td>599</td>
</tr>
<tr>

  <td>FSJE</td>
  <td>6188</td>
  <td>2522</td>
  <td>2</td>
  <td></td>
  <td>6190</td>
  <td>2522</td>
</tr>
<tr>

  <td>FST</td>
  <td>4244</td>
  <td>1494</td>
  <td>107</td>
  <td>49</td>
  <td>4351</td>
  <td>1543</td>
</tr>
<tr>

  <td>IUP</td>
  <td>939</td>
  <td>494</td>
  <td>1</td>
  <td></td>
  <td>940</td>
  <td>494</td>
</tr>
<tr>
  <td rowspan="3">Université des Sciences Islamiques d’Aioun</td>
  <td>FC</td>
  <td>473</td>
  <td>136</td>
  <td></td>
  <td></td>
  <td>473</td>
  <td>136</td>
</tr>
<tr>

  <td>FLASH</td>
  <td>427</td>
  <td>265</td>
  <td>3</td>
  <td>3</td>
  <td>430</td>
  <td>268</td>
</tr>
<tr>

  <td>FOE</td>
  <td>223</td>
  <td>62</td>
  <td></td>
  <td></td>
  <td>223</td>
  <td>62</td>
</tr>
<tr>
  <td rowspan="4">Ecole Supérieure Polytechnique</td>
  <td>ESP cycle Ing</td>
  <td>139</td>
  <td>46</td>
  <td></td>
  <td></td>
  <td>139</td>
  <td>46</td>
</tr>

<tr>

  <td>IPGE</td>
  <td>237</td>
  <td>40</td>
  <td></td>
  <td></td>
  <td>237</td>
  <td>40</td>
</tr>
<tr>

  <td>IS2M</td>
  <td>119</td>
  <td>23</td>
  <td></td>
  <td></td>
  <td>119</td>
  <td>23</td>
</tr>
<tr>

  <td>ISMBTPU</td>
  <td>265</td>
  <td>44</td>
  <td></td>
  <td></td>
  <td>265</td>
  <td>44</td>
</tr>
<tr>
  <td rowspan="2">Academie Navale</td>
  <td>ESO</td>
  <td>45</td>
  <td></td>
  <td></td>
  <td></td>
  <td>45</td>
  <td>0</td>
</tr>
<tr>

  <td>ISSM</td>
  <td>83</td>
  <td>25</td>
  <td></td>
  <td></td>
  <td>83</td>
  <td>25</td>
</tr>
<tr>
  <td>ENS</td>
  <td></td>
  <td>592</td>
  <td>125</td>
  <td></td>
  <td></td>
  <td>592</td>
  <td>125</td>
</tr>
<tr>
  <td>ISA</td>
  <td></td>
  <td>123</td>
  <td>30</td>
  <td></td>
  <td></td>
  <td>123</td>
  <td>30</td>
</tr>
<tr>
  <td>ISCAE</td>
  <td></td>
  <td>1418</td>
  <td>826</td>
  <td></td>
  <td></td>
  <td>1418</td>
  <td>826</td>
</tr>
<tr>
  <td>ISERI</td>
  <td></td>
  <td>2558</td>
  <td>875</td>
  <td>126</td>
  <td>5</td>
  <td>2684</td>
  <td>880</td>
</tr>
<tr>
  <td>ISET</td>
  <td></td>
  <td>328</td>
  <td>27</td>
  <td></td>
  <td></td>
  <td>328</td>
  <td>27</td>
</tr>
<tr>
  <td>ISPLTI</td>
  <td></td>
  <td>194</td>
  <td>75</td>
  <td></td>
  <td></td>
  <td>194</td>
  <td>75</td>
</tr>
<tr>
  <td>Total général</td>
  <td></td>
  <td>23324</td>
  <td>8795</td>
  <td>332</td>
  <td>102</td>
  <td>23656</td>
  <td>8897</td>
</tr>
</tbody>
</table>`;
const boursier_Nationalité=`<table class="table table-centered mb-0" id="table1">

<thead class="table-dark">
<tr>
  <td colspan="2" rowspan="3">
    <center>INSTITUTIONS</center>
  </td>
 
  
  
  <th colspan="2">ETRANGERS</th>
  <th colspan="2">NATIONAUX</th>
  <th colspan="2">
    <center>Total</center>
  </th>
</tr>

<tr>

  <td>OUI</td>
    <td>NON</td>
    <td>OUI</td>
    <td>NON</td>
    <td>OUI</td>
    <td>NON</td>
   
</tr>
</thead>
<tbody>

<tr>
  <td rowspan="5">Université <br> de <br> Nouakchott Asrya</td>
  <td>FLSH</td>
  <td>3365</td>
  <td>1132</td>
  <td></td>
  <td></td>
  <td>3365</td>
  <td>1132</td>
</tr>
<tr>

  <td>FM</td>
  <td>1364</td>
  <td>554</td>
  <td>93</td>
  <td>45</td>
  <td>1457</td>
  <td>599</td>
</tr>
<tr>

  <td>FSJE</td>
  <td>6188</td>
  <td>2522</td>
  <td>2</td>
  <td></td>
  <td>6190</td>
  <td>2522</td>
</tr>
<tr>

  <td>FST</td>
  <td>4244</td>
  <td>1494</td>
  <td>107</td>
  <td>49</td>
  <td>4351</td>
  <td>1543</td>
</tr>
<tr>

  <td>IUP</td>
  <td>939</td>
  <td>494</td>
  <td>1</td>
  <td></td>
  <td>940</td>
  <td>494</td>
</tr>
<tr>
  <td rowspan="3">Université des Sciences Islamiques d’Aioun</td>
  <td>FC</td>
  <td>473</td>
  <td>136</td>
  <td></td>
  <td></td>
  <td>473</td>
  <td>136</td>
</tr>
<tr>

  <td>FLASH</td>
  <td>427</td>
  <td>265</td>
  <td>3</td>
  <td>3</td>
  <td>430</td>
  <td>268</td>
</tr>
<tr>

  <td>FOE</td>
  <td>223</td>
  <td>62</td>
  <td></td>
  <td></td>
  <td>223</td>
  <td>62</td>
</tr>
<tr>
  <td rowspan="4">Ecole Supérieure Polytechnique</td>
  <td>ESP cycle Ing</td>
  <td>139</td>
  <td>46</td>
  <td></td>
  <td></td>
  <td>139</td>
  <td>46</td>
</tr>

<tr>

  <td>IPGE</td>
  <td>237</td>
  <td>40</td>
  <td></td>
  <td></td>
  <td>237</td>
  <td>40</td>
</tr>
<tr>

  <td>IS2M</td>
  <td>119</td>
  <td>23</td>
  <td></td>
  <td></td>
  <td>119</td>
  <td>23</td>
</tr>
<tr>

  <td>ISMBTPU</td>
  <td>265</td>
  <td>44</td>
  <td></td>
  <td></td>
  <td>265</td>
  <td>44</td>
</tr>
<tr>
  <td rowspan="2">Academie Navale</td>
  <td>ESO</td>
  <td>45</td>
  <td></td>
  <td></td>
  <td></td>
  <td>45</td>
  <td>0</td>
</tr>
<tr>

  <td>ISSM</td>
  <td>83</td>
  <td>25</td>
  <td></td>
  <td></td>
  <td>83</td>
  <td>25</td>
</tr>
<tr>
  <td>ENS</td>
  <td></td>
  <td>592</td>
  <td>125</td>
  <td></td>
  <td></td>
  <td>592</td>
  <td>125</td>
</tr>
<tr>
  <td>ISA</td>
  <td></td>
  <td>123</td>
  <td>30</td>
  <td></td>
  <td></td>
  <td>123</td>
  <td>30</td>
</tr>
<tr>
  <td>ISCAE</td>
  <td></td>
  <td>1418</td>
  <td>826</td>
  <td></td>
  <td></td>
  <td>1418</td>
  <td>826</td>
</tr>
<tr>
  <td>ISERI</td>
  <td></td>
  <td>2558</td>
  <td>875</td>
  <td>126</td>
  <td>5</td>
  <td>2684</td>
  <td>880</td>
</tr>
<tr>
  <td>ISET</td>
  <td></td>
  <td>328</td>
  <td>27</td>
  <td></td>
  <td></td>
  <td>328</td>
  <td>27</td>
</tr>
<tr>
  <td>ISPLTI</td>
  <td></td>
  <td>194</td>
  <td>75</td>
  <td></td>
  <td></td>
  <td>194</td>
  <td>75</td>
</tr>
<tr>
  <td>Total général</td>
  <td></td>
  <td>23324</td>
  <td>8795</td>
  <td>332</td>
  <td>102</td>
  <td>23656</td>
  <td>8897</td>
</tr>
</tbody>
</table>`;
const boursier_lg_formation=`
<table class="table table-centered mb-0" id="table1">

<thead class="table-dark">
<tr>
  <td colspan="2" rowspan="3">
    <center>INSTITUTIONS</center>
  </td>
  
  
  
  <th colspan="2">Anglais</th>
  <th colspan="2">Francais</th>
  <th colspan="2">
    <center>Total</center>
  </th>
</tr>

<tr>

  <td>OUI</td>
    <td>NON</td>
    <td>OUI</td>
    <td>NON</td>
    <td>OUI</td>
    <td>NON</td>
   
</tr>
</thead>
<tbody>

<tr>
  <td rowspan="5">Université <br> de <br> Nouakchott Asrya</td>
  <td>FLSH</td>
  <td>3365</td>
  <td>1132</td>
  <td></td>
  <td></td>
  <td>3365</td>
  <td>1132</td>
</tr>
<tr>

  <td>FM</td>
  <td>1364</td>
  <td>554</td>
  <td>93</td>
  <td>45</td>
  <td>1457</td>
  <td>599</td>
</tr>
<tr>

  <td>FSJE</td>
  <td>6188</td>
  <td>2522</td>
  <td>2</td>
  <td></td>
  <td>6190</td>
  <td>2522</td>
</tr>
<tr>

  <td>FST</td>
  <td>4244</td>
  <td>1494</td>
  <td>107</td>
  <td>49</td>
  <td>4351</td>
  <td>1543</td>
</tr>
<tr>

  <td>IUP</td>
  <td>939</td>
  <td>494</td>
  <td>1</td>
  <td></td>
  <td>940</td>
  <td>494</td>
</tr>
<tr>
  <td rowspan="3">Université des Sciences Islamiques d’Aioun</td>
  <td>FC</td>
  <td>473</td>
  <td>136</td>
  <td></td>
  <td></td>
  <td>473</td>
  <td>136</td>
</tr>
<tr>

  <td>FLASH</td>
  <td>427</td>
  <td>265</td>
  <td>3</td>
  <td>3</td>
  <td>430</td>
  <td>268</td>
</tr>
<tr>

  <td>FOE</td>
  <td>223</td>
  <td>62</td>
  <td></td>
  <td></td>
  <td>223</td>
  <td>62</td>
</tr>
<tr>
  <td rowspan="4">Ecole Supérieure Polytechnique</td>
  <td>ESP cycle Ing</td>
  <td>139</td>
  <td>46</td>
  <td></td>
  <td></td>
  <td>139</td>
  <td>46</td>
</tr>

<tr>

  <td>IPGE</td>
  <td>237</td>
  <td>40</td>
  <td></td>
  <td></td>
  <td>237</td>
  <td>40</td>
</tr>
<tr>

  <td>IS2M</td>
  <td>119</td>
  <td>23</td>
  <td></td>
  <td></td>
  <td>119</td>
  <td>23</td>
</tr>
<tr>

  <td>ISMBTPU</td>
  <td>265</td>
  <td>44</td>
  <td></td>
  <td></td>
  <td>265</td>
  <td>44</td>
</tr>
<tr>
  <td rowspan="2">Academie Navale</td>
  <td>ESO</td>
  <td>45</td>
  <td></td>
  <td></td>
  <td></td>
  <td>45</td>
  <td>0</td>
</tr>
<tr>

  <td>ISSM</td>
  <td>83</td>
  <td>25</td>
  <td></td>
  <td></td>
  <td>83</td>
  <td>25</td>
</tr>
<tr>
  <td>ENS</td>
  <td></td>
  <td>592</td>
  <td>125</td>
  <td></td>
  <td></td>
  <td>592</td>
  <td>125</td>
</tr>
<tr>
  <td>ISA</td>
  <td></td>
  <td>123</td>
  <td>30</td>
  <td></td>
  <td></td>
  <td>123</td>
  <td>30</td>
</tr>
<tr>
  <td>ISCAE</td>
  <td></td>
  <td>1418</td>
  <td>826</td>
  <td></td>
  <td></td>
  <td>1418</td>
  <td>826</td>
</tr>
<tr>
  <td>ISERI</td>
  <td></td>
  <td>2558</td>
  <td>875</td>
  <td>126</td>
  <td>5</td>
  <td>2684</td>
  <td>880</td>
</tr>
<tr>
  <td>ISET</td>
  <td></td>
  <td>328</td>
  <td>27</td>
  <td></td>
  <td></td>
  <td>328</td>
  <td>27</td>
</tr>
<tr>
  <td>ISPLTI</td>
  <td></td>
  <td>194</td>
  <td>75</td>
  <td></td>
  <td></td>
  <td>194</td>
  <td>75</td>
</tr>
<tr>
  <td>Total général</td>
  <td></td>
  <td>23324</td>
  <td>8795</td>
  <td>332</td>
  <td>102</td>
  <td>23656</td>
  <td>8897</td>
</tr>
</tbody>
</table>`;

const transfere_nationalite=`<table class="table table-centered mb-0" id="table1">

<thead class="table-dark">
<tr>
  <td colspan="2" rowspan="3">
    <center>INSTITUTIONS</center>
  </td>
  
  
  
  <th colspan="2">ETRANGERS</th>
  <th colspan="2">NATIONAUX</th>
  <th colspan="2">
    <center>Total</center>
  </th>
</tr>

<tr>

  <td>OUI</td>
    <td>NON</td>
    <td>OUI</td>
    <td>NON</td>
    <td>OUI</td>
    <td>NON</td>
   
</tr>
</thead>
<tbody>

<tr>
  <td rowspan="5">Université <br> de <br> Nouakchott Asrya</td>
  <td>FLSH</td>
  <td>3365</td>
  <td>1132</td>
  <td></td>
  <td></td>
  <td>3365</td>
  <td>1132</td>
</tr>
<tr>

  <td>FM</td>
  <td>1364</td>
  <td>554</td>
  <td>93</td>
  <td>45</td>
  <td>1457</td>
  <td>599</td>
</tr>
<tr>

  <td>FSJE</td>
  <td>6188</td>
  <td>2522</td>
  <td>2</td>
  <td></td>
  <td>6190</td>
  <td>2522</td>
</tr>
<tr>

  <td>FST</td>
  <td>4244</td>
  <td>1494</td>
  <td>107</td>
  <td>49</td>
  <td>4351</td>
  <td>1543</td>
</tr>
<tr>

  <td>IUP</td>
  <td>939</td>
  <td>494</td>
  <td>1</td>
  <td></td>
  <td>940</td>
  <td>494</td>
</tr>
<tr>
  <td rowspan="3">Université des Sciences Islamiques d’Aioun</td>
  <td>FC</td>
  <td>473</td>
  <td>136</td>
  <td></td>
  <td></td>
  <td>473</td>
  <td>136</td>
</tr>
<tr>

  <td>FLASH</td>
  <td>427</td>
  <td>265</td>
  <td>3</td>
  <td>3</td>
  <td>430</td>
  <td>268</td>
</tr>
<tr>

  <td>FOE</td>
  <td>223</td>
  <td>62</td>
  <td></td>
  <td></td>
  <td>223</td>
  <td>62</td>
</tr>
<tr>
  <td rowspan="4">Ecole Supérieure Polytechnique</td>
  <td>ESP cycle Ing</td>
  <td>139</td>
  <td>46</td>
  <td></td>
  <td></td>
  <td>139</td>
  <td>46</td>
</tr>

<tr>

  <td>IPGE</td>
  <td>237</td>
  <td>40</td>
  <td></td>
  <td></td>
  <td>237</td>
  <td>40</td>
</tr>
<tr>

  <td>IS2M</td>
  <td>119</td>
  <td>23</td>
  <td></td>
  <td></td>
  <td>119</td>
  <td>23</td>
</tr>
<tr>

  <td>ISMBTPU</td>
  <td>265</td>
  <td>44</td>
  <td></td>
  <td></td>
  <td>265</td>
  <td>44</td>
</tr>
<tr>
  <td rowspan="2">Academie Navale</td>
  <td>ESO</td>
  <td>45</td>
  <td></td>
  <td></td>
  <td></td>
  <td>45</td>
  <td>0</td>
</tr>
<tr>

  <td>ISSM</td>
  <td>83</td>
  <td>25</td>
  <td></td>
  <td></td>
  <td>83</td>
  <td>25</td>
</tr>
<tr>
  <td>ENS</td>
  <td></td>
  <td>592</td>
  <td>125</td>
  <td></td>
  <td></td>
  <td>592</td>
  <td>125</td>
</tr>
<tr>
  <td>ISA</td>
  <td></td>
  <td>123</td>
  <td>30</td>
  <td></td>
  <td></td>
  <td>123</td>
  <td>30</td>
</tr>
<tr>
  <td>ISCAE</td>
  <td></td>
  <td>1418</td>
  <td>826</td>
  <td></td>
  <td></td>
  <td>1418</td>
  <td>826</td>
</tr>
<tr>
  <td>ISERI</td>
  <td></td>
  <td>2558</td>
  <td>875</td>
  <td>126</td>
  <td>5</td>
  <td>2684</td>
  <td>880</td>
</tr>
<tr>
  <td>ISET</td>
  <td></td>
  <td>328</td>
  <td>27</td>
  <td></td>
  <td></td>
  <td>328</td>
  <td>27</td>
</tr>
<tr>
  <td>ISPLTI</td>
  <td></td>
  <td>194</td>
  <td>75</td>
  <td></td>
  <td></td>
  <td>194</td>
  <td>75</td>
</tr>
<tr>
  <td>Total général</td>
  <td></td>
  <td>23324</td>
  <td>8795</td>
  <td>332</td>
  <td>102</td>
  <td>23656</td>
  <td>8897</td>
</tr>
</tbody>
</table>`;

return [genre_formation,genre_redoublant,genre_boursier,
genre_transefere,genre_lg_formation,boursier_niveau,transefere_niveau,niveau_nationalité,
redoublant_formation,boursier_formation,genre_niveau,transfere_formation,formation_nationalité,
Formation_lg_formation,Redoublant_boursier,redoublant_transfere,redoublant_nationalité,
redoublant_lg__formation, boursier_transfere,boursier_Nationalité,boursier_lg_formation,transfere_nationalite];
}

function display_tables(){

        console.log("heyy u");
      if(window.select1=="formation" && window.select2=="Genre"){
        console.log("heyy 2");

        document.getElementById("tables").innerHTML = rep_per()[0];
        console.log("heyy 2");
      } 
      else if(window.select1=="Redoublant" && window.select2=="Genre"){
        console.log("heyy 3");

        document.getElementById("tables").innerHTML = rep_per()[1];
      } 
      else if(window.select1=="boursier" && window.select2=="Genre"){
        console.log("heyy 4");

        document.getElementById("tables").innerHTML = rep_per()[2];
      } 
  
      else if(window.select1=="Transfere" && window.select2=="Genre"){
        console.log("heyy 4");
       
        document.getElementById("tables").innerHTML = rep_per()[3];
      }
      else if(window.select1=="Langue" && window.select2=="Genre"){
        console.log("heyy 4");
       
        document.getElementById("tables").innerHTML = rep_per()[4];
      }
      else if(window.select1=="boursier" && window.select2=="Niveau"){
        console.log("heyy 4");
       
        document.getElementById("tables").innerHTML = rep_per()[5];
      }
      else if(window.select1=="transfere" && window.select2=="Niveau"){
        console.log("heyy 4");
       
        document.getElementById("tables").innerHTML = rep_per()[6];
      }
      else if(window.select1=="Nationalité" && window.select2=="Niveau"){
        console.log("heyy 4");
       
        document.getElementById("tables").innerHTML = rep_per()[7];
      }
      else if(window.select1=="Redoublant" && window.select2=="formation"){
        console.log("heyy 4");
       
        document.getElementById("tables").innerHTML = rep_per()[8];
      }
      else if(window.select1=="boursier" && window.select2=="formation"){
        console.log("heyy 4");
       
        document.getElementById("tables").innerHTML = rep_per()[9];
      }
      else if(window.select1=="Genre" && window.select2=="Niveau"){
        console.log("heyy 4");
       
        document.getElementById("tables").innerHTML = rep_per()[10];
      }
      else if(window.select1=="transfere" && window.select2=="formation"){
        console.log("heyy 4");
       
        document.getElementById("tables").innerHTML = rep_per()[11];
      }
      else if(window.select1=="formation" && window.select2=="Nationalité"){
        console.log("heyy 4");
       
        document.getElementById("tables").innerHTML = rep_per()[12];
      }
      else if(window.select1=="Langue" && window.select2=="formation"){
        console.log("heyy 4");
       
        document.getElementById("tables").innerHTML = rep_per()[13];
      }
      else if(window.select1=="Redoublant" && window.select2=="boursier"){
        console.log("heyy 4");
       
        document.getElementById("tables").innerHTML = rep_per()[14];
      }
      else if(window.select1=="Redoublant" && window.select2=="transfere"){
        console.log("heyy 4");
       
        document.getElementById("tables").innerHTML = rep_per()[15];
      }
      else if(window.select1=="Redoublant" && window.select2=="Nationalité"){
        console.log("heyy 4");
       
        document.getElementById("tables").innerHTML = rep_per()[16];
      }
      else if(window.select1=="Redoublant" && window.select2=="Langue"){
        console.log("heyy 4");
       
        document.getElementById("tables").innerHTML = rep_per()[17];
      }
      else if(window.select1=="transfere" && window.select2=="boursier"){
        console.log("heyy 4");
       
        document.getElementById("tables").innerHTML = rep_per()[18];
      }
      
      else if(window.select1=="Nationalité" && window.select2=="boursier"){
        console.log("heyy 4");
       
        document.getElementById("tables").innerHTML = rep_per()[19];
      }
    
      else if(window.select1=="Langue" && window.select2=="boursier"){
        console.log("heyy 4");
       
        document.getElementById("tables").innerHTML = rep_per()[20];
      }
      else if(window.select1=="transfere" && window.select2=="Nationalité"){
        console.log("heyy 4");
       
        document.getElementById("tables").innerHTML = rep_per()[21];
      }
    
      else {
        document.getElementById("tables").innerHTML = "";
        }


}

// function filterbycriteria(genre)


