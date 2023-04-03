var c = 8;

b = false;

// console.log("ahhh")
// console.log(etudiat_data.cand1)

// for (let prop in etudiat_data.cand1) {
//     console.log(`${prop}`);
//   }
function creat(aff_year){

    const ef_m_i_lmd = `

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title">Effectifs des étudiants mauritaniens par institution, par niveau et par genre (LMD)</h4>
                    <!-- <p class="text-muted font-14">
                        Use one of two modifier classes to make <code>&lt;thead&gt;</code>s appear light or dark gray.
                    </p> -->

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <!-- <a href="#table-head-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Preview
                            </a> -->
                        </li>
                        <li class="nav-item">
                            <!-- <a href="#table-head-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a> -->
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="scroll-horizontal-preview">
                            <div class="table-responsive">
                                <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                                    <thead class="table-dark">
                                        <tr>
                                            <td colspan="2" rowspan="2" ><center>INSTITUTIONS</center></td>
                                            <th colspan="2" >L1</th>
                                            <th colspan="2">L2</th>
                                            <th colspan="2">L3</th>
                                            <th colspan="2">M1</th>
                                            <th colspan="2">M2</th>
                                            <th colspan="2">D1</th>
                                            <th colspan="2">D2</th>
                                            <th colspan="2">D3</th>
                                            <th colspan="2">D4</th>
                                            <th colspan="2">D5</th>
                                            <th colspan="2">Totaux</th>
                                        </tr>

                                        <tr>
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
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td rowspan="4">Université <br> de <br> Nouakchott Asrya</td>
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

                                        <td>IUP</td>
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
                                        <td rowspan="3">Université des Sciences Islamiques d’Aioun</td>
                                        <td>FLASH</td>
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

                                        <td>FOE</td>
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

                                        <td>FC</td>
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
                                        <td>ISET</td>
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
                                        <td>ISCAE</td>
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
                                        <td>ISERI</td>
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
                                        <td>ISPLTI</td>
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
                                        <td>ISA</td>
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
                                        <td>Total</td>
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
                                </tbody>
                                </table>
                            </div> <!-- end table-responsive-->
                        </div> <!-- end preview-->


                    </div> <!-- end tab-content-->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>

    `;

const eff_can_wil = `
<div class="row">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Effectifs des candidats au bac par wilaya</h4>
            <ul class="nav nav-tabs nav-bordered mb-3">
                <li class="nav-item"></li>
                <li class="nav-item"></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane show active" id="table-head-preview">
                    <div class="table-responsive-sm">
                        <table class="table table-centered mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th>Wilaya</th>
                                    <th>Effectif des candidats</th>
                                </tr>
                            </thead>
                            <tbody>
                            ${etudiat_data.cand1
                              .map((element, index) => {
                                // console.log(element.annee_scolaire == '2021-2022')
                                if (element.annee_scolaire == aff_year) {
                                return `
                                        <tr>
                                            <td>${element.wilaya}</td>
                                            <td>${element.effectif}</td>
                                        </tr>
                                    `;
                                }
                              })
                              .join("")}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
`;

const tr_s_g = `

<div class="row">
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">

            <h4 class="header-title">Taux de réussite par genre et par série</h4>
            <!-- <p class="text-muted font-14">
                Use one of two modifier classes to make <code>&lt;thead&gt;</code>s appear light or dark gray.
            </p> -->

            <ul class="nav nav-tabs nav-bordered mb-3">
                <li class="nav-item">
                    <!-- <a href="#table-head-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                        Preview
                    </a> -->
                </li>
                <li class="nav-item">
                    <!-- <a href="#table-head-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                        Code
                    </a> -->
                </li>
            </ul> <!-- end nav-->
            <div class="tab-content">
                <div class="tab-pane show active" id="table-head-preview">
                    <div class="table-responsive-sm">
                        <table class="table table-centered mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th ></th>
                                    <th>genre</th>
                                    <th>LM</th>
                                    <th>LO</th>
                                    <th>M</th>
                                    <th>SN</th>
                                    <th>TMGM</th>
                                    <th>TOTAL</th>
                                </tr>
                            </thead>
                                <tr>
                                   <th rowspan="3">Présents</th>
                                   <th>T</th>
                                   <th>11100</th>
                                   <th>8209</th>
                                   <th>19341</th>
                                   <th>4444</th>
                                   <th>1999</th>
                                   <th>40000</th>
                                </tr>
                                <tr>

                                    <th>F</th>
                                    <th>5212</th>
                                    <th>4171</th>
                                    <th>675</th>
                                    <th>12173</th>
                                    <th>12222</th>
                                    <th>222229</th>
                                 </tr>
                                 <tr>

                                    <th>G</th>
                                    <th>6000</th>
                                    <th>5444</th>
                                    <th>10000</th>
                                    <th>2566</th>
                                    <th>988</th>
                                    <th>35900</th>
                                 </tr>
                                 <tr>
                                    <th rowspan="3">Admis première <br> et <br> deuxième session</th>
                                    <th>T</th>
                                    <th>11100</th>
                                    <th>8209</th>
                                    <th>19341</th>
                                    <th>4444</th>
                                    <th>1999</th>
                                    <th>40000</th>
                                 </tr>
                                 <tr>

                                     <th>F</th>
                                     <th>5212</th>
                                     <th>4171</th>
                                     <th>675</th>
                                     <th>12173</th>
                                     <th>12222</th>
                                     <th>222229</th>
                                  </tr>
                                  <tr>

                                     <th>G</th>
                                     <th>6000</th>
                                     <th>5444</th>
                                     <th>10000</th>
                                     <th>2566</th>
                                     <th>988</th>
                                     <th>35900</th>
                                  </tr>
                                  <tr>
                                    <th rowspan="3">% Admis</th>
                                    <th>T</th>
                                    <th>11100</th>
                                    <th>8209</th>
                                    <th>19341</th>
                                    <th>4444</th>
                                    <th>1999</th>
                                    <th>40000</th>
                                 </tr>
                                 <tr>

                                     <th>F</th>
                                     <th>5212</th>
                                     <th>4171</th>
                                     <th>675</th>
                                     <th>12173</th>
                                     <th>12222</th>
                                     <th>222229</th>
                                  </tr>
                                  <tr>

                                     <th>G</th>
                                     <th>6000</th>
                                     <th>5444</th>
                                     <th>10000</th>
                                     <th>2566</th>
                                     <th>988</th>
                                     <th>35900</th>
                                  </tr>
                                  <tr>
                                     <th rowspan="3">Admis première <br> et <br> deuxième session</th>
                                     <th>T</th>
                                     <th>11100</th>
                                     <th>8209</th>
                                     <th>19341</th>
                                     <th>4444</th>
                                     <th>1999</th>
                                     <th>40000</th>
                                  </tr>
                                  <tr>

                                      <th>F</th>
                                      <th>5212</th>
                                      <th>4171</th>
                                      <th>675</th>
                                      <th>12173</th>
                                      <th>12222</th>
                                      <th>222229</th>
                                   </tr>
                                   <tr>

                                      <th>G</th>
                                      <th>6000</th>
                                      <th>5444</th>
                                      <th>10000</th>
                                      <th>2566</th>
                                      <th>988</th>
                                      <th>35900</th>
                                   </tr>
                            <tbody>

                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->
                </div> <!-- end preview-->


            </div> <!-- end tab-content-->

        </div> <!-- end card body-->
    </div> <!-- end card -->
</div><!-- end col-->
</div>
<!-- end row-->


`;

const tr_s_c = `
<div class="row">
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">

            <h4 class="header-title">Taux de réussite par session et par type de candidature</h4>
            <!-- <p class="text-muted font-14">
                Use one of two modifier classes to make <code>&lt;thead&gt;</code>s appear light or dark gray.
            </p> -->

            <ul class="nav nav-tabs nav-bordered mb-3">
                <li class="nav-item">
                    <!-- <a href="#table-head-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                        Preview
                    </a> -->
                </li>
                <li class="nav-item">
                    <!-- <a href="#table-head-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                        Code
                    </a> -->
                </li>
            </ul> <!-- end nav-->
            <div class="tab-content">
                <div class="tab-pane show active" id="table-head-preview">
                    <div class="table-responsive">
                        <table class="table table-centered mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <tr>

                                        <th colspan="5"><center> Candidats </center></th>
                                        <th colspan="5"><center>Admis</center></th>
                                        <th colspan="5"><center>Taux de réussite</center></th>
                                    </tr>
                                </tr>
                            </thead>
                            <tr>
                                <td>Serie</td>
                                <td>Libres</td>
                                <td>Privés</td>
                                <td>Officiels</td>
                                <td>Total</td>
                                <td>Libres</td>
                                <td>Privés</td>
                                <td>Officiels</td>
                                <td>Total</td>
                                <td>Libres</td>
                                <td>Privés</td>
                                <td>Officiels</td>
                                <td>Total</td>
                            </tr>
                            <tr>
                                <td>LM</td>
                                <td>3797</td>
                                <td>1326</td>
                                <td>4921</td>
                                <td>10044</td>
                                <td>329</td>
                                <td>197</td>
                                <td>602</td>
                                <td>1128</td>
                                <td>9%</td>
                                <td>15%</td>
                                <td>12%</td>
                            </tr>
                            <tr>
                                <td>LO</td>
                                <td>1733</td>
                                <td>5019</td>
                                <td>1457</td>
                                <td>8209</td>
                                <td>137</td>
                                <td>901</td>
                                <td>258</td>
                                <td>1296</td>
                                <td>8%</td>
                                <td>18%</td>
                                <td>18%</td>
                            </tr>
                            <tr>
                                <td>M</td>
                                <td>190</td>
                                <td>821</td>
                                <td>930</td>
                                <td>1941</td>
                                <td>8</td>
                                <td>320</td>
                                <td>242</td>
                                <td>570</td>
                                <td>4%</td>
                                <td>39%</td>
                                <td>26%</td>
                            </tr>
                            <tr>
                                <td>SN</td>
                                <td>4154</td>
                                <td>11596</td>
                                <td>8571</td>
                                <td>24321</td>
                                <td>248</td>
                                <td>2741</td>
                                <td>1055</td>
                                <td>4044</td>
                                <td>6%</td>
                                <td>24%</td>
                                <td>12%</td>
                            </tr>
                            <tr>
                                <td>TMGM</td>
                                <td>39</td>
                                <td></td>
                                <td>163</td>
                                <td>202</td>
                                <td>7</td>
                                <td></td>
                                <td>49</td>
                                <td>56</td>
                                <td>18%</td>
                                <td></td>
                                <td>30%</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>9913</td>
                                <td>18762</td>
                                <td>16042</td>
                                <td>44717</td>
                                <td>729</td>
                                <td>4159</td>
                                <td>2206</td>
                                <td>7094</td>
                                <td>7%</td>
                                <td>22%</td>
                                <td>14%</td>
                            </tr>
                            <tbody>

                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->
                </div> <!-- end preview-->


            </div> <!-- end tab-content-->

        </div> <!-- end card body-->
    </div> <!-- end card -->
</div><!-- end col-->
</div>
<!-- end row-->


`;

const r_e_p_p = `


<div class="row">
<div class="col-xl-12">
    <div class="card">
        <div class="card-body">

            <h4 class="header-title">Répartition des orientés à l’étranger par pays et par filière</h4>
            <!-- <p class="text-muted font-14">
                Use one of two modifier classes to make <code>&lt;thead&gt;</code>s appear light or dark gray.
            </p> -->

            <ul class="nav nav-tabs nav-bordered mb-3">
                <li class="nav-item">
                    <!-- <a href="#table-head-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                        Preview
                    </a> -->
                </li>
                <li class="nav-item">
                    <!-- <a href="#table-head-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                        Code
                    </a> -->
                </li>
            </ul> <!-- end nav-->
            <div class="tab-content">
                <div class="tab-pane show active" id="table-head-preview">
                    <div class="table-responsive">
                        <table class="table table-centered mb-0">
                            <thead class="table-dark">
                                <tr>
                                        <th>Filière</th>
                                        <th>algerie</th>
                                        <th>Egypte</th>
                                        <th>Maroc</th>
                                        <th>Senegal</th>
                                        <th>Tunisie</th>
                                        <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Biotechnologie</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>6</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td>CPGEI</td>
                                    <td></td>
                                    <td></td>
                                    <td>15</td>
                                    <td></td>
                                    <td>2</td>
                                    <td>17</td>
                                </tr>
                                <tr>
                                    <td>Ecole Supéreure de Technologies</td>
                                    <td></td>
                                    <td></td>
                                    <td>16</td>
                                    <td></td>
                                    <td></td>
                                    <td>16</td>
                                </tr>
                                <tr>
                                    <td>ENCG</td>
                                    <td></td>
                                    <td></td>
                                    <td>8</td>
                                    <td></td>
                                    <td></td>
                                    <td>8</td>
                                </tr>
                                <tr>
                                    <td>Ingénieur</td>
                                    <td></td>
                                    <td></td>
                                    <td>10</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>Ingénieur agromome</td>
                                    <td></td>
                                    <td>2</td>
                                    <td>1</td>
                                    <td></td>
                                    <td></td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>Ingénieur en Industrie</td>
                                    <td></td>
                                    <td>2</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Ingénieur en Mécanique</td>
                                    <td></td>
                                    <td>2</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Laboratoires</td>
                                    <td></td>
                                    <td></td>
                                    <td>1</td>
                                    <td></td>
                                    <td></td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Médecine Dentaire</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>Médecine Générale</td>
                                    <td></td>
                                    <td></td>
                                    <td>10</td>
                                    <td>16</td>
                                    <td>11</td>
                                    <td>37</td>
                                </tr>
                                <tr>
                                    <td>Médecine vétérinaire</td>
                                    <td></td>
                                    <td></td>
                                    <td>2</td>
                                    <td></td>
                                    <td></td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Pharmacie</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>Science de la mer</td>
                                    <td></td>
                                    <td></td>
                                    <td>1</td>
                                    <td></td>
                                    <td></td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>SCIENCES APP ET DE TECHNOLOGIE</td>
                                    <td>5</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Sciences appliquées et de technologie</td>
                                    <td></td>
                                    <td></td>
                                    <td>4</td>
                                    <td></td>
                                    <td>8</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>Sciences de l&#39;agriculture</td>
                                    <td></td>
                                    <td></td>
                                    <td>1</td>
                                    <td></td>
                                    <td>2</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>Sciences et techniques de la santé</td>
                                    <td></td>
                                    <td></td>
                                    <td>1</td>
                                    <td></td>
                                    <td>4</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Sciences et technologie de l&#39;environnement</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>2</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Total général</td>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>70</td>
                                    <td>19</td>
                                    <td>40</td>
                                    <td>140</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->
                </div> <!-- end preview-->


`;
       return [eff_can_wil, tr_s_g ,tr_s_c,r_e_p_p]                     }
function ah() {
  // console.log("hi ",window.ahm);

  const radioButto = document.getElementsByName("customRadio2");



    let aff_years = document.querySelector(
      'input[name="customRadio2"]:checked'
    ).value;
    //    console.log("asdffsgdghddhdfhbszhdsfbqtwrtger",aff_years);


  // console.log("asdffsgdghddhdfhbszhdsfbqtwrtger",aff_years);
  if (window.ahm.includes("ef_e_w")) {
    document.getElementById("Eff_can_wilaya").innerHTML = creat(aff_years)[0];
  } else {
    document.getElementById("Eff_can_wilaya").innerHTML = "";
  }

  if (window.ahm.includes("tr_s_g")) {
    document.getElementById("tr_s_g").innerHTML = creat(aff_years)[1];
  } else {
    document.getElementById("tr_s_g").innerHTML = "";
  }
  if (window.ahm.includes("ef_m_i_lmd")) {
    document.getElementById("eff_m_i_lmd").innerHTML = creat(aff_years)[2];
  } else {
    document.getElementById("eff_m_i_lmd").innerHTML = "";
  }

  if (window.ahm.includes("tr_s_c")) {
    document.getElementById("tr_s_c").innerHTML = creat(aff_years)[3];
  } else {
    document.getElementById("tr_s_c").innerHTML = "";
  }

  if (window.ahm.includes("r_e_p_p")) {
    document.getElementById("r_e_p_p").innerHTML = creat(aff_years)[2];
  } else {
    document.getElementById("r_e_p_p").innerHTML = "";
  }
}
