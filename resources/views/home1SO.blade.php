@extends('layouts.layoutSO')

@section('content')
    <!-- Default ordering -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Default ordering</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <fieldset>
                <legend class="font-weight-semibold"><i class="icon-cash4 mr-2"></i>Filter and Select</legend>

                <!-- First Row -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Pairs:</label>
                            <select id="pairDD" class="form-control multiselect-select-all-filtering"
                                    multiple="multiple" data-fouc>
                                @foreach ($pairs as $p)
                                    <option value="{{ $p->pair }}">{{ $p->pair }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Symbol:</label>
                            <select id="symbolDD" class="form-control multiselect-select-all-filtering"
                                    multiple="multiple" data-fouc>
                                @foreach ($symbol as $s)
                                    <option value="{{ $s->symbol }}">{{ $s->symbol }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Lowest Price Range:</label>
                            <div class="mb-1">
                                <div class="ui-slider-horizontal jui-slider-range" data-fouc></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Market Cap:</label>
                            <div class="mb-1">
                                <div class="ui-slider-horizontal jui-slider-range" data-fouc></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /First Row -->

                <!-- Second Row -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Algorithm:</label>
                            <select id="pairDD" class="form-control multiselect-select-all-filtering"
                                    multiple="multiple" data-fouc>
                                @foreach ($pairs as $p)
                                    <option value="{{ $p->pair }}">{{ $p->pair }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Exchange:</label>
                            <select id="pairDD" class="form-control multiselect-select-all-filtering"
                                    multiple="multiple" data-fouc>
                                @foreach ($pairs as $p)
                                    <option value="{{ $p->pair }}">{{ $p->pair }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Last Price Range:</label>
                            <div class="mb-1">
                                <div class="ui-slider-horizontal jui-slider-range" data-fouc></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Highest Price Range:</label>
                            <div class="mb-1">
                                <div class="ui-slider-horizontal jui-slider-range" data-fouc></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Second Row -->

            </fieldset>
        </div>
    </div>

    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Default ordering</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">

            <table class="table datatable-responsive dataTable" style="width:100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>TICKER</th>
                    <th>SYMBOL</th>
                    <th>ALGORITHM</th>
                    <th>LAST</th>
                    <th>CHG %</th>
                    <th>CHG</th>
                    <th>HIGH</th>
                    <th>LOW</th>
                    <th>VOL</th>
                    <th>EXCHANGE</th>
                </tr>
                </thead>
                <tbody>

                <tr role="row" class="odd">
                    <td tabindex="0" class="sorting_1">1</td>
                    <td>OAX/ETH</td>
                    <td>OAX</td>
                    <td>N/A</td>
                    <td>0.00061720</td>
                    <td>-181.40%</td>
                    <td>-0.00001140</td>
                    <td>0.00065050</td>
                    <td>0.00060200</td>
                    <td>66,122</td>
                    <td>Binance</td>
                </tr>
                <tr role="row" class="even">
                    <td tabindex="0" class="sorting_1">2</td>
                    <td>SNM/ETH</td>
                    <td>SNM</td>
                    <td>N/A</td>
                    <td>0.00015005</td>
                    <td>-448.20%</td>
                    <td>-0.00000704</td>
                    <td>0.00016114</td>
                    <td>0.00014648</td>
                    <td>467,703</td>
                    <td>Binance</td>
                </tr>
                <tr role="row" class="odd">
                    <td tabindex="0" class="sorting_1">3</td>
                    <td>RCN/BNB</td>
                    <td>RCN</td>
                    <td>N/A</td>
                    <td>0.00203900</td>
                    <td>84.10%</td>
                    <td>0.00001700</td>
                    <td>0.00220000</td>
                    <td>0.00200300</td>
                    <td>652,229</td>
                    <td>Binance</td>
                </tr>
                <tr role="row" class="even">
                    <td tabindex="0" class="sorting_1">4</td>
                    <td>AMB/ETH</td>
                    <td>AMB</td>
                    <td>N/A</td>
                    <td>0.00047465</td>
                    <td>-631.80%</td>
                    <td>-0.00003201</td>
                    <td>0.00054200</td>
                    <td>0.00047310</td>
                    <td>468,314</td>
                    <td>Binance</td>
                </tr>
                <tr role="row" class="odd">
                    <td tabindex="0" class="sorting_1">5</td>
                    <td>CND/ETH</td>
                    <td>CND</td>
                    <td>N/A</td>
                    <td>0.00006530</td>
                    <td>-440.60%</td>
                    <td>-0.00000301</td>
                    <td>0.00007078</td>
                    <td>0.00006495</td>
                    <td>1.266M</td>
                    <td>Binance</td>
                </tr>
                <tr role="row" class="even">
                    <td tabindex="0" class="sorting_1">6</td>
                    <td>NEBL/BNB</td>
                    <td>NEBL</td>
                    <td>N/A</td>
                    <td>0.21814000</td>
                    <td>-5.50%</td>
                    <td>-0.00012000</td>
                    <td>0.22303000</td>
                    <td>0.21089000</td>
                    <td>3,511</td>
                    <td>Binance</td>
                </tr>
                <tr role="row" class="odd">
                    <td tabindex="0" class="sorting_1">7</td>
                    <td>STEEM/BNB</td>
                    <td>STEEM</td>
                    <td>N/A</td>
                    <td>0.04762000</td>
                    <td>489.00%</td>
                    <td>0.00222000</td>
                    <td>0.04805000</td>
                    <td>0.04513000</td>
                    <td>12,663</td>
                    <td>Binance</td>
                </tr>
                <tr role="row" class="even">
                    <td tabindex="0" class="sorting_1">8</td>
                    <td>SYS/BNB</td>
                    <td>SYS</td>
                    <td>SHA256</td>
                    <td>0.00767000</td>
                    <td>-166.70%</td>
                    <td>-0.00013000</td>
                    <td>0.00803000</td>
                    <td>0.00762000</td>
                    <td>55,740</td>
                    <td>Binance</td>
                </tr>
                <tr role="row" class="odd">
                    <td tabindex="0" class="sorting_1">9</td>
                    <td>BCN/ETH</td>
                    <td>BCN</td>
                    <td>CryptoNight</td>
                    <td>0.00000000</td>
                    <td>0.00%</td>
                    <td>0.00000000</td>
                    <td>0.00000000</td>
                    <td>0.00000000</td>
                    <td>0</td>
                    <td>Binance</td>
                </tr>
                <tr role="row" class="even">
                    <td tabindex="0" class="sorting_1">10</td>
                    <td>BCN/BNB</td>
                    <td>BCN</td>
                    <td>CryptoNight</td>
                    <td>0.00000000</td>
                    <td>0.00%</td>
                    <td>0.00000000</td>
                    <td>0.00000000</td>
                    <td>0.00000000</td>
                    <td>0</td>
                    <td>Binance</td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1" tabindex="0">11</td>
                    <td>ENJ/BNB</td>
                    <td>ENJ</td>
                    <td>N/A</td>
                    <td>0.00658300</td>
                    <td>28.90%</td>
                    <td>0.00001900</td>
                    <td>0.00707600</td>
                    <td>0.00656400</td>
                    <td>223,292</td>
                    <td>Binance</td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1" tabindex="0">12</td>
                    <td>2GIVE/BTC</td>
                    <td>2GIVE</td>
                    <td>Scrypt</td>
                    <td>0.00000040</td>
                    <td>256.41%</td>
                    <td>0.00000001</td>
                    <td>0.00000042</td>
                    <td>0.00000039</td>
                    <td>424,275</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1" tabindex="0">13</td>
                    <td>ABY/BTC</td>
                    <td>ABY</td>
                    <td>Scrypt</td>
                    <td>0.00000033</td>
                    <td>-571.43%</td>
                    <td>-0.00000002</td>
                    <td>0.00000035</td>
                    <td>0.00000032</td>
                    <td>2.453M</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1" tabindex="0">14</td>
                    <td>BLK/BTC</td>
                    <td>BLK</td>
                    <td>Scrypt</td>
                    <td>0.00001447</td>
                    <td>-122.87%</td>
                    <td>-0.00000018</td>
                    <td>0.00001467</td>
                    <td>0.00001411</td>
                    <td>73,981</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1" tabindex="0">15</td>
                    <td>BRK/BTC</td>
                    <td>BRK</td>
                    <td>SHA256</td>
                    <td>0.00000753</td>
                    <td>635.59%</td>
                    <td>0.00000045</td>
                    <td>0.00000789</td>
                    <td>0.00000708</td>
                    <td>8,796</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1" tabindex="0">16</td>
                    <td>COVAL/BTC</td>
                    <td>COVAL</td>
                    <td>Multiple</td>
                    <td>0.00000041</td>
                    <td>250.00%</td>
                    <td>0.00000001</td>
                    <td>0.00000042</td>
                    <td>0.00000039</td>
                    <td>1.989M</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1" tabindex="0">17</td>
                    <td>DMD/BTC</td>
                    <td>DMD</td>
                    <td>Groestl</td>
                    <td>0.00026678</td>
                    <td>-69.98%</td>
                    <td>-0.00000188</td>
                    <td>0.00027790</td>
                    <td>0.00026000</td>
                    <td>409</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1" tabindex="0">18</td>
                    <td>DTB/BTC</td>
                    <td>DTB</td>
                    <td>N/A</td>
                    <td>0.00001425</td>
                    <td>178.57%</td>
                    <td>0.00000025</td>
                    <td>0.00001472</td>
                    <td>0.00001410</td>
                    <td>5,749</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1" tabindex="0">19</td>
                    <td>EGC/BTC</td>
                    <td>EGC</td>
                    <td>X15</td>
                    <td>0.00000460</td>
                    <td>-149.89%</td>
                    <td>-0.00000007</td>
                    <td>0.00000484</td>
                    <td>0.00000460</td>
                    <td>5,316</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1" tabindex="0">20</td>
                    <td>FLDC/BTC</td>
                    <td>FLDC</td>
                    <td>Stanford Folding</td>
                    <td>0.00000034</td>
                    <td>-285.71%</td>
                    <td>-0.00000001</td>
                    <td>0.00000035</td>
                    <td>0.00000033</td>
                    <td>1.709M</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1" tabindex="0">21</td>
                    <td>FTC/BTC</td>
                    <td>FTC</td>
                    <td>NeoScrypt</td>
                    <td>0.00000491</td>
                    <td>-219.12%</td>
                    <td>-0.00000011</td>
                    <td>0.00000504</td>
                    <td>0.00000491</td>
                    <td>100,623</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1" tabindex="0">22</td>
                    <td>GAM/BTC</td>
                    <td>GAM</td>
                    <td>Scrypt</td>
                    <td>0.00035185</td>
                    <td>-56.24%</td>
                    <td>-0.00000199</td>
                    <td>0.00035666</td>
                    <td>0.00035184</td>
                    <td>359</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1" tabindex="0">23</td>
                    <td>GAME/BTC</td>
                    <td>GAME</td>
                    <td>Scrypt</td>
                    <td>0.00002091</td>
                    <td>111.22%</td>
                    <td>0.00000023</td>
                    <td>0.00002141</td>
                    <td>0.00002024</td>
                    <td>70,484</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1" tabindex="0">24</td>
                    <td>GBYTE/BTC</td>
                    <td>GBYTE</td>
                    <td>N/A</td>
                    <td>0.00765870</td>
                    <td>563.49%</td>
                    <td>0.00040854</td>
                    <td>0.00765870</td>
                    <td>0.00724300</td>
                    <td>346</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1" tabindex="0">25</td>
                    <td>GRC/BTC</td>
                    <td>GRC</td>
                    <td>Scrypt</td>
                    <td>0.00000147</td>
                    <td>-200.00%</td>
                    <td>-0.00000003</td>
                    <td>0.00000150</td>
                    <td>0.00000146</td>
                    <td>22,902</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1" tabindex="0">26</td>
                    <td>GUP/BTC</td>
                    <td>GUP</td>
                    <td>N/A</td>
                    <td>0.00000472</td>
                    <td>373.63%</td>
                    <td>0.00000017</td>
                    <td>0.00000493</td>
                    <td>0.00000439</td>
                    <td>630,792</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1" tabindex="0">27</td>
                    <td>HMQ/BTC</td>
                    <td>HMQ</td>
                    <td>N/A</td>
                    <td>0.00000234</td>
                    <td>493.27%</td>
                    <td>0.00000011</td>
                    <td>0.00000237</td>
                    <td>0.00000222</td>
                    <td>970,870</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1" tabindex="0">28</td>
                    <td>IOC/BTC</td>
                    <td>IOC</td>
                    <td>X11</td>
                    <td>0.00003650</td>
                    <td>244.18%</td>
                    <td>0.00000087</td>
                    <td>0.00003820</td>
                    <td>0.00003550</td>
                    <td>11,198</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1" tabindex="0">29</td>
                    <td>ION/BTC</td>
                    <td>ION</td>
                    <td>N/A</td>
                    <td>0.00005403</td>
                    <td>-310.26%</td>
                    <td>-0.00000173</td>
                    <td>0.00005699</td>
                    <td>0.00005403</td>
                    <td>23,936</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1" tabindex="0">30</td>
                    <td>LBC/BTC</td>
                    <td>LBC</td>
                    <td>N/A</td>
                    <td>0.00000600</td>
                    <td>0.00%</td>
                    <td>0.00000000</td>
                    <td>0.00000612</td>
                    <td>0.00000593</td>
                    <td>303,368</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1" tabindex="0">31</td>
                    <td>LRC/BTC</td>
                    <td>LRC</td>
                    <td>N/A</td>
                    <td>0.00001090</td>
                    <td>73.94%</td>
                    <td>0.00000008</td>
                    <td>0.00001208</td>
                    <td>0.00001074</td>
                    <td>1.747M</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1" tabindex="0">32</td>
                    <td>MEME/BTC</td>
                    <td>MEME</td>
                    <td>X11</td>
                    <td>0.00000624</td>
                    <td>-126.58%</td>
                    <td>-0.00000008</td>
                    <td>0.00000647</td>
                    <td>0.00000605</td>
                    <td>59,696</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1" tabindex="0">33</td>
                    <td>MUSIC/BTC</td>
                    <td>MUSIC</td>
                    <td>Ethash</td>
                    <td>0.00000029</td>
                    <td>357.14%</td>
                    <td>0.00000001</td>
                    <td>0.00000029</td>
                    <td>0.00000027</td>
                    <td>4.006M</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1" tabindex="0">34</td>
                    <td>NEOS/BTC</td>
                    <td>NEOS</td>
                    <td>SHA256</td>
                    <td>0.00004386</td>
                    <td>-287.87%</td>
                    <td>-0.00000130</td>
                    <td>0.00004512</td>
                    <td>0.00004102</td>
                    <td>3,557</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1" tabindex="0">35</td>
                    <td>NLC2/BTC</td>
                    <td>NLC2</td>
                    <td>PoS</td>
                    <td>0.00000301</td>
                    <td>-504.73%</td>
                    <td>-0.00000016</td>
                    <td>0.00000326</td>
                    <td>0.00000300</td>
                    <td>754,424</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1" tabindex="0">36</td>
                    <td>NXC/BTC</td>
                    <td>NXC</td>
                    <td>N/A</td>
                    <td>0.00000170</td>
                    <td>897.44%</td>
                    <td>0.00000014</td>
                    <td>0.00000170</td>
                    <td>0.00000162</td>
                    <td>93,977</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1" tabindex="0">37</td>
                    <td>OK/BTC</td>
                    <td>OK</td>
                    <td>N/A</td>
                    <td>0.00000460</td>
                    <td>360.36%</td>
                    <td>0.00000016</td>
                    <td>0.00000471</td>
                    <td>0.00000440</td>
                    <td>277,976</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1" tabindex="0">38</td>
                    <td>PINK/BTC</td>
                    <td>PINK</td>
                    <td>X11</td>
                    <td>0.00000053</td>
                    <td>0.00%</td>
                    <td>0.00000000</td>
                    <td>0.00000057</td>
                    <td>0.00000051</td>
                    <td>609,320</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1" tabindex="0">39</td>
                    <td>PTOY/BTC</td>
                    <td>PTOY</td>
                    <td>N/A</td>
                    <td>0.00000394</td>
                    <td>-295.57%</td>
                    <td>-0.00000012</td>
                    <td>0.00000413</td>
                    <td>0.00000379</td>
                    <td>383,395</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1" tabindex="0">40</td>
                    <td>SHIFT/BTC</td>
                    <td>SHIFT</td>
                    <td>DPoS</td>
                    <td>0.00008639</td>
                    <td>52.36%</td>
                    <td>0.00000045</td>
                    <td>0.00008999</td>
                    <td>0.00008472</td>
                    <td>10,831</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1" tabindex="0">41</td>
                    <td>SLR/BTC</td>
                    <td>SLR</td>
                    <td>Scrypt</td>
                    <td>0.00000689</td>
                    <td>-726.78%</td>
                    <td>-0.00000054</td>
                    <td>0.00000743</td>
                    <td>0.00000678</td>
                    <td>107,476</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1" tabindex="0">42</td>
                    <td>SLS/BTC</td>
                    <td>SLS</td>
                    <td>Scrypt</td>
                    <td>0.00237003</td>
                    <td>306.09%</td>
                    <td>0.00007039</td>
                    <td>0.00244950</td>
                    <td>0.00224673</td>
                    <td>304</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1" tabindex="0">43</td>
                    <td>SPC/BTC</td>
                    <td>SPC</td>
                    <td>NIST5</td>
                    <td>0.00000136</td>
                    <td>-422.54%</td>
                    <td>-0.00000006</td>
                    <td>0.00000145</td>
                    <td>0.00000128</td>
                    <td>494,151</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1" tabindex="0">44</td>
                    <td>SPHR/BTC</td>
                    <td>SPHR</td>
                    <td>Scrypt</td>
                    <td>0.00010145</td>
                    <td>118.69%</td>
                    <td>0.00000119</td>
                    <td>0.00010385</td>
                    <td>0.00010008</td>
                    <td>1,406</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1" tabindex="0">45</td>
                    <td>SYNX/BTC</td>
                    <td>SYNX</td>
                    <td>X11</td>
                    <td>0.00000779</td>
                    <td>12.85%</td>
                    <td>0.00000001</td>
                    <td>0.00000845</td>
                    <td>0.00000755</td>
                    <td>316,998</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1" tabindex="0">46</td>
                    <td>VRC/BTC</td>
                    <td>VRC</td>
                    <td>Scrypt</td>
                    <td>0.00001912</td>
                    <td>20.96%</td>
                    <td>0.00000004</td>
                    <td>0.00002000</td>
                    <td>0.00001750</td>
                    <td>55,960</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1" tabindex="0">47</td>
                    <td>VRM/BTC</td>
                    <td>VRM</td>
                    <td>N/A</td>
                    <td>0.00009651</td>
                    <td>287.82%</td>
                    <td>0.00000270</td>
                    <td>0.00009897</td>
                    <td>0.00009381</td>
                    <td>2,620</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1" tabindex="0">48</td>
                    <td>WINGS/BTC</td>
                    <td>WINGS</td>
                    <td>N/A</td>
                    <td>0.00002053</td>
                    <td>29.31%</td>
                    <td>0.00000006</td>
                    <td>0.00002068</td>
                    <td>0.00002013</td>
                    <td>44,622</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1" tabindex="0">49</td>
                    <td>XST/BTC</td>
                    <td>XST</td>
                    <td>X13</td>
                    <td>0.00002044</td>
                    <td>59.06%</td>
                    <td>0.00000012</td>
                    <td>0.00002075</td>
                    <td>0.00001971</td>
                    <td>4,024</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1" tabindex="0">50</td>
                    <td>XWC/BTC</td>
                    <td>XWC</td>
                    <td>Scrypt</td>
                    <td>0.00001050</td>
                    <td>-28.49%</td>
                    <td>-0.00000003</td>
                    <td>0.00001081</td>
                    <td>0.00000982</td>
                    <td>52,137</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="odd">
                    <td class="sorting_1" tabindex="0">51</td>
                    <td>SALT/ETH</td>
                    <td>SALT</td>
                    <td>N/A</td>
                    <td>0.00159591</td>
                    <td>-636.25%</td>
                    <td>-0.00010844</td>
                    <td>0.00171950</td>
                    <td>0.00155485</td>
                    <td>11,515</td>
                    <td>Bittrex</td>
                </tr>
                <tr role="row" class="even">
                    <td class="sorting_1" tabindex="0">52</td>
                    <td>NXT/USDT</td>
                    <td>NXT</td>
                    <td>PoS</td>
                    <td>0.02847697</td>
                    <td>581.70%</td>
                    <td>0.00156544</td>
                    <td>0.02847697</td>
                    <td>0.02823131</td>
                    <td>123,871</td>
                    <td>Bittrex</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /default ordering -->

    <script>

        $(document).ready(function () {
            const table = $('.datatable-responsive').DataTable();

            // Filtering Dropdown
            $('#pairDD').on('change', function () {
                let search = [];

                $.each($('#pairDD option:selected'), function () {
                    search.push($(this).val());
                });

                search = search.join('|');
                table.column(2).search(search, true, false).draw();
            });

            $('#symbolDD').on('change', function () {
                let search = [];

                $.each($('#symbolDD option:selected'), function () {
                    search.push($(this).val());
                });

                search = search.join('|');
                table.column(2).search(search, true, false).draw();
            });

        });
    </script>

@endsection
