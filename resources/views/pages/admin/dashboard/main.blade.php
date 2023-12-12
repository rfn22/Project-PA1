<x-admin-layout title="">
    <div class="page-wrapper">
        <!-- Page Title -->
        <div class="page-title">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h2 class="page-title-text">Howdy, {{  Auth::User()->name }}</h2>
                </div>
                <div class="col-sm-6 text-right">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Body -->
        <div class="page-body">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="dashboard-stat color-success">
                        <div class="content"><h4>523</h4> <span>Users</span></div>
                        <div class="icon"><i class="icon-people"></i></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="dashboard-stat color-warning">
                        <div class="content"><h4>111</h4> <span>Projects</span></div>
                        <div class="icon"><i class="icon-layers"></i></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="dashboard-stat color-primary">
                        <div class="content"><h4>$12K</h4> <span>Income</span></div>
                        <div class="icon"><i class="icon-docs"></i></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="dashboard-stat color-danger">
                        <div class="content"><h4>$523</h4> <span>Expenses</span></div>
                        <div class="icon"><i class="icon-credit-card"></i></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="box-title p-3">Income/Expense</div> 
                        <div class="panel-wrapper">
                            <ul class="chart-tag">
                                <li><span style="background: #3483FF"></span> Income</li>
                                <li><span style="background: #ffc107"></span> Expense</li>
                            </ul>
                            <div class="chart-container">
                                <div id="morris-area-chart2" style="height: 321px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="321" version="1.1" width="442.263" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; top: -0.4px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.52499961853027" y="282.3999996185303" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.39998722076416" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#e0e0e0" d="M45.02499961853027,282.3999996185303H417.263" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.52499961853027" y="218.0499997138977" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.399993419647217" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan></text><path fill="none" stroke="#e0e0e0" d="M45.02499961853027,218.0499997138977H417.263" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.52499961853027" y="153.69999980926514" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.399999618530273" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">150</tspan></text><path fill="none" stroke="#e0e0e0" d="M45.02499961853027,153.69999980926514H417.263" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.52499961853027" y="89.34999990463257" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.399998188018799" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">225</tspan></text><path fill="none" stroke="#e0e0e0" d="M45.02499961853027,89.34999990463257H417.263" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.52499961853027" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.399999618530273" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">300</tspan></text><path fill="none" stroke="#e0e0e0" d="M45.02499961853027,25H417.263" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="417.2629999999999" y="294.8999996185303" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6.8)"><tspan dy="4.39998722076416" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2018</tspan></text><text x="355.2799388050928" y="294.8999996185303" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6.8)"><tspan dy="4.39998722076416" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2017</tspan></text><text x="293.1270610041722" y="294.8999996185303" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6.8)"><tspan dy="4.39998722076416" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2016</tspan></text><text x="231.1439998092651" y="294.8999996185303" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6.8)"><tspan dy="4.39998722076416" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2015</tspan></text><text x="169.16093861435797" y="294.8999996185303" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6.8)"><tspan dy="4.39998722076416" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014</tspan></text><text x="107.17787741945085" y="294.8999996185303" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6.8)"><tspan dy="4.39998722076416" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text><text x="45.02499961853027" y="294.8999996185303" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6.8)"><tspan dy="4.39998722076416" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><path fill="#f5c945" stroke="none" d="M45.02499961853027,282.3999996185303L107.17787741945085,175.149999777476L169.16093861435797,215.4759997177124L231.1439998092651,224.05599970499674L293.1270610041722,127.95999984741212L355.2799388050928,194.02599974950155L417.2629999999999,67.89999993642172L417.2629999999999,282.3999996185303L45.02499961853027,282.3999996185303Z" fill-opacity="0.8" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.8;"></path><path fill="none" stroke="#ffc107" d="M45.02499961853027,282.3999996185303L107.17787741945085,175.149999777476L169.16093861435797,215.4759997177124L231.1439998092651,224.05599970499674L293.1270610041722,127.95999984741212L355.2799388050928,194.02599974950155L417.2629999999999,67.89999993642172" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.02499961853027" cy="282.3999996185303" r="0" fill="#ffc107" stroke="#ffc107" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="107.17787741945085" cy="175.149999777476" r="0" fill="#ffc107" stroke="#ffc107" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="169.16093861435797" cy="215.4759997177124" r="0" fill="#ffc107" stroke="#ffc107" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="231.1439998092651" cy="224.05599970499674" r="0" fill="#ffc107" stroke="#ffc107" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="293.1270610041722" cy="127.95999984741212" r="0" fill="#ffc107" stroke="#ffc107" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="355.2799388050928" cy="194.02599974950155" r="0" fill="#ffc107" stroke="#ffc107" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="417.2629999999999" cy="67.89999993642172" r="0" fill="#ffc107" stroke="#ffc107" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#78aaf7" stroke="none" d="M45.02499961853027,282.3999996185303L107.17787741945085,201.74799973805744L169.16093861435797,232.63599969228108L231.1439998092651,112.5159998703003L293.1270610041722,153.69999980926514L355.2799388050928,207.75399972915648L417.2629999999999,153.69999980926514L417.2629999999999,282.3999996185303L45.02499961853027,282.3999996185303Z" fill-opacity="0.8" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.8;"></path><path fill="none" stroke="#3483ff" d="M45.02499961853027,282.3999996185303L107.17787741945085,201.74799973805744L169.16093861435797,232.63599969228108L231.1439998092651,112.5159998703003L293.1270610041722,153.69999980926514L355.2799388050928,207.75399972915648L417.2629999999999,153.69999980926514" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.02499961853027" cy="282.3999996185303" r="0" fill="#3483ff" stroke="#3483ff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="107.17787741945085" cy="201.74799973805744" r="0" fill="#3483ff" stroke="#3483ff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="169.16093861435797" cy="232.63599969228108" r="0" fill="#3483ff" stroke="#3483ff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="231.1439998092651" cy="112.5159998703003" r="0" fill="#3483ff" stroke="#3483ff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="293.1270610041722" cy="153.69999980926514" r="0" fill="#3483ff" stroke="#3483ff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="355.2799388050928" cy="207.75399972915648" r="0" fill="#3483ff" stroke="#3483ff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="417.2629999999999" cy="153.69999980926514" r="0" fill="#3483ff" stroke="#3483ff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 60.5904px; top: 90px; display: none;"><div class="morris-hover-row-label">2013</div><div class="morris-hover-point" style="color: #ffc107">
    Area A:
    125
    </div><div class="morris-hover-point" style="color: #3483FF">
    Area B:
    94
    </div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="box-title p-3">Invoice By Status</div> 
                        <div class="panel-body">
                            <ul class="chart-tag">
                                <li><span style="background: #98aafb"></span> Paid</li>
                                <li><span style="background: #ccc5a8"></span> Unpaid</li>
                                <li><span style="background: #52bacc"></span> Other</li>
                            </ul>
                            <div id="morris-donut-invoice-by-status" style="height: 289px;"><svg height="290" version="1.1" width="334" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.125px; top: -0.4px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#98aafb" d="M166.531,234.16666666666669A89.66666666666667,89.66666666666667,0,1,0,77.31174851373257,153.44629953339805" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#98aafb" stroke="#ffffff" d="M166.531,237.16666666666669A92.66666666666667,92.66666666666667,0,1,0,74.32671779486117,153.74561810514743L32.70212277059886,157.91944930009706A134.5,134.5,0,1,1,166.531,279Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#ccc5a8" d="M77.31174851373257,153.44629953339805A89.66666666666667,89.66666666666667,0,0,0,106.36273774994945,210.98226326562786" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#ccc5a8" stroke="#ffffff" d="M74.32671779486117,153.74561810514743A92.66666666666667,92.66666666666667,0,0,0,104.3496732137024,213.2065769064853L79.63371418533592,240.51620549701275A129.5,129.5,0,0,1,37.67717396871785,157.4205850138481Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#52bacc" d="M106.36273774994945,210.98226326562786A89.66666666666667,89.66666666666667,0,0,0,166.50283038633637,234.16666224179409" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#52bacc" stroke="#ffffff" d="M104.3496732137024,213.2065769064853A92.66666666666667,92.66666666666667,0,0,0,166.5018879085558,237.16666209375L166.4903163758055,273.9999936094312A129.5,129.5,0,0,1,79.63371418533592,240.51620549701275Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="166.531" y="134.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 800 15px Arial;" font-size="15px" font-weight="800" transform="matrix(1.1275,0,0,1.1275,-21.234,-18.5269)" stroke-width="0.8869119061681324"><tspan dy="5.999995231628418" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Paid</tspan></text><text x="166.531" y="154.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 14px Arial;" font-size="14px" transform="matrix(1.0148,0,0,1.0148,-2.4591,-2.1619)" stroke-width="0.9854576561163387"><tspan dy="4.8000030517578125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">7</tspan></text></svg></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="panel panel-default">
                        <div class="row widget-separator-1">
                            <div class="col-md-4">
                                <div class="widget-1">
                                    <div class="content">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5 class="title">Total Revenue</h5>
                                                <span class="descr">Awerage Weekly Profit</span>
                                            </div>
                                            <div class="col text-right">
                                                <div class="number text-primary">+$12900</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5 class="title">Total Tax</h5>
                                                <span class="descr">Awerage Weekly Profit</span>
                                            </div>
                                            <div class="col text-right">
                                                <div class="number text-danger">+$2900</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="widget-2">
                                    <div class="box-title pb-3 pt-3">Order Statatics</div>
                                    <div class="row content align-items-end">
                                        <div class="col">
                                            <div class="number">$12000</div>
                                            <div class="count text-primary">(490 Sales)</div>
                                            <div class="month">April</div>
                                        </div>
                                        <div class="col">
                                            <div id="sparkline-bar1"><canvas width="158" height="154" style="display: inline-block; width: 158px; height: 154px; vertical-align: top;"></canvas></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row p-3">
                                    <div class="col-12 box-title pb-3 pt-3">Expenses</div>
                                    <div class="col-md-5">
                                        <div class="widget-10 d-inline-block">
                                            <div class="bullet"><span class="bg-primary"></span></div> 
                                            <div class="value">Health</div> 
                                        </div>
                                        <div class="widget-10 d-inline-block">
                                            <div class="bullet"><span class="bg-warning"></span></div> 
                                            <div class="value">Automobiles</div> 
                                        </div>
                                        <div class="widget-10 d-inline-block">
                                            <div class="bullet"><span class="bg-danger"></span></div> 
                                            <div class="value">Internet</div> 
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div id="morris-donutchart-2" style="height: 150px;"><svg height="150" version="1.1" width="94.9" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.9px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#5cbae6" d="M47.45,99.96666666666667A24.96666666666667,24.96666666666667,0,0,0,49.949726373217864,50.15878802265309" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#5cbae6" stroke="#ffffff" d="M47.45,102.96666666666667A27.96666666666667,27.96666666666667,0,0,0,50.25009402821066,47.17386268492115L51.1995895598268,37.73818203397963A37.45,37.45,0,0,1,47.45,112.45Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#fac364" d="M49.949726373217864,50.15878802265309A24.96666666666667,24.96666666666667,0,0,0,22.5149136130884,73.74464693344852" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#fac364" stroke="#ffffff" d="M50.25009402821066,47.17386268492115A27.96666666666667,27.96666666666667,0,0,0,19.51870830624989,73.59380344080549L15.04104593103012,73.3683762212445A32.45,32.45,0,0,1,50.69897680150546,42.7130575968662Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#ccc5a8" d="M22.5149136130884,73.74464693344852A24.96666666666667,24.96666666666667,0,0,0,47.442156490470566,99.96666543461106" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#ccc5a8" stroke="#ffffff" d="M19.51870830624989,73.59380344080549A27.96666666666667,27.96666666666667,0,0,0,47.44121401268999,102.96666528656701L47.4398055320068,107.4499983986567A32.45,32.45,0,0,1,15.04104593103012,73.3683762212445Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="47.45" y="65" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 800 15px Arial;" font-size="15px" font-weight="800" transform="matrix(0.5779,0,0,0.5779,20.0271,31.9927)" stroke-width="1.730307106659791"><tspan dy="5.999999046325684" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Health</tspan></text><text x="47.45" y="85" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 14px Arial;" font-size="14px" transform="matrix(0.5201,0,0,0.5201,22.8197,36.9493)" stroke-width="1.9225634178905207"><tspan dy="4.799995422363281" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text></svg></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="panel panel-default">
                        <div class="row widget-separator-1 m-0">
                            <div class="col-md-4">
                                <div class="widget-1">
                                    <div class="content">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5 class="title">Total Sales</h5>
                                                <span class="descr">Monthly</span>
                                            </div>
                                            <div class="col text-right">
                                                <div class="number text-success">+$22900</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5 class="title">Delivery Charges</h5>
                                                <span class="descr">Monthly</span>
                                            </div>
                                            <div class="col text-right">
                                                <div class="number text-warning">+$2900</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="widget-1">
                                    <div class="content">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5 class="title">Orders</h5>
                                                <span class="descr">Weekly Orders</span>
                                            </div>
                                            <div class="col text-right">
                                                <div class="number text-secondary">+1,450</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5 class="title">Support Tickets</h5>
                                                <span class="descr">Average per User</span>
                                            </div>
                                            <div class="col text-right">
                                                <div class="number text-danger">+90</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="widget-1">
                                    <div class="content">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5 class="title">Expenses</h5>
                                                <span class="descr">Monthly Expenses</span>
                                            </div>
                                            <div class="col text-right">
                                                <div class="number text-success">+$12900</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5 class="title">Logistics</h5>
                                                <span class="descr">Overall</span>
                                            </div>
                                            <div class="col text-right">
                                                <div class="number text-warning">-10%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="panel panel-default">
                        <div class="panel-head">
                            <div class="panel-title">
                                <div class="panel-title-text">Invoices</div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Office Manager</td>
                                            <td>$ 400.00</td>
                                            <td><span class="badge badge-success badge-sm badge-pill">Paid</span></td>
                                            <td><i class="far fa-clock mr-2 text-muted"></i> 24 March 2018</td>
                                            <td>
                                                <a href="#" class="tippy d-inline-block" data-tippy-animation="perspective" data-tippy-arrow="true" data-tippy="" data-original-title="Edit"><i class="icon-pencil mr-2 text-info"></i></a>
                                                <a href="#" class="tippy d-inline-block" data-tippy-animation="perspective" data-tippy-arrow="true" data-tippy="" data-original-title="Delete"><i class="icon-trash text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Apez Template</td>
                                            <td>$ 1400.00</td>
                                            <td><span class="badge badge-warning badge-sm badge-pill">Unpaid</span></td>
                                            <td><i class="far fa-clock mr-2 text-muted"></i> 23 March 2018</td>
                                            <td>
                                                <a href="#" class="tippy d-inline-block" data-tippy-animation="perspective" data-tippy-arrow="true" data-tippy="" data-original-title="Edit"><i class="icon-pencil mr-2 text-info"></i></a>
                                                <a href="#" class="tippy d-inline-block" data-tippy-animation="perspective" data-tippy-arrow="true" data-tippy="" data-original-title="Delete"><i class="icon-trash text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Web Development</td>
                                            <td>$ 12400.00</td>
                                            <td><span class="badge badge-danger badge-sm badge-pill">Unknown</span></td>
                                            <td><i class="far fa-clock mr-2 text-muted"></i> 22 March 2018</td>
                                            <td>
                                                <a href="#" class="tippy d-inline-block" data-tippy-animation="perspective" data-tippy-arrow="true" data-tippy="" data-original-title="Edit"><i class="icon-pencil mr-2 text-info"></i></a>
                                                <a href="#" class="tippy d-inline-block" data-tippy-animation="perspective" data-tippy-arrow="true" data-tippy="" data-original-title="Delete"><i class="icon-trash text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Web Design</td>
                                            <td>$ 1900.00</td>
                                            <td><span class="badge badge-primary badge-sm badge-pill">In Process</span></td>
                                            <td><i class="far fa-clock mr-2 text-muted"></i> 16 March 2018</td>
                                            <td>
                                                <a href="#" class="tippy d-inline-block" data-tippy-animation="perspective" data-tippy-arrow="true" data-tippy="" data-original-title="Edit"><i class="icon-pencil mr-2 text-info"></i></a>
                                                <a href="#" class="tippy d-inline-block" data-tippy-animation="perspective" data-tippy-arrow="true" data-tippy="" data-original-title="Delete"><i class="icon-trash text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Klinikal Theme</td>
                                            <td>$ 2100.00</td>
                                            <td><span class="badge badge-dark badge-sm badge-pill">Pending</span></td>
                                            <td><i class="far fa-clock mr-2 text-muted"></i> 11 March 2018</td>
                                            <td>
                                                <a href="#" class="tippy d-inline-block" data-tippy-animation="perspective" data-tippy-arrow="true" data-tippy="" data-original-title="Edit"><i class="icon-pencil mr-2 text-info"></i></a>
                                                <a href="#" class="tippy d-inline-block" data-tippy-animation="perspective" data-tippy-arrow="true" data-tippy="" data-original-title="Delete"><i class="icon-trash text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Klinik Template</td>
                                            <td>$ 400.00</td>
                                            <td><span class="badge badge-info badge-sm badge-pill">Paid</span></td>
                                            <td><i class="far fa-clock mr-2 text-muted"></i> 10 March 2018</td>
                                            <td>
                                                <a href="#" class="tippy d-inline-block" data-tippy-animation="perspective" data-tippy-arrow="true" data-tippy="" data-original-title="Edit"><i class="icon-pencil mr-2 text-info"></i></a>
                                                <a href="#" class="tippy d-inline-block" data-tippy-animation="perspective" data-tippy-arrow="true" data-tippy="" data-original-title="Delete"><i class="icon-trash text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Logo Design</td>
                                            <td>$ 600.00</td>
                                            <td><span class="badge badge-warning badge-sm badge-pill">Partillay Paid</span></td>
                                            <td><i class="far fa-clock mr-2 text-muted"></i> 10 March 2018</td>
                                            <td>
                                                <a href="#" class="tippy d-inline-block" data-tippy-animation="perspective" data-tippy-arrow="true" data-tippy="" data-original-title="Edit"><i class="icon-pencil mr-2 text-info"></i></a>
                                                <a href="#" class="tippy d-inline-block" data-tippy-animation="perspective" data-tippy-arrow="true" data-tippy="" data-original-title="Delete"><i class="icon-trash text-danger"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-head">
                            <div class="panel-title">
                                <div class="panel-title-text">Recent Activity</div>
                            </div>
                        </div>
                        <div class="panel-wrapper">
                            <div class="recent-list">
                                <ul>
                                    <li>
                                        <div class="main-icon"><i class="icon-star"></i></div>
                                        <div class="content">
                                            <p><strong>Steve Jordon</strong> left a review <span class="badge badge-success badge-pill">5.0</span> on iPhone</p>
                                            <div class="row action align-items-center">
                                                <div class="col-sm-8">
                                                    <a href="#"><i class="icon-pencil"></i></a>
                                                    <a href="#"><i class="icon-note"></i></a>
                                                    <a href="#"><i class="icon-trash"></i></a>
                                                </div>
                                                <div class="col-sm-4 text-right">
                                                    <span class="date">14 Mar 2018</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="main-icon"><i class="main-icon icon-people"></i></div>
                                        <div class="content">
                                            <p><strong>Mellisa bates</strong> commented on Rakesh Moria's article</p>
                                            <div class="row action align-items-center">
                                                <div class="col-sm-8">
                                                    <a href="#"><i class="icon-pencil"></i></a>
                                                    <a href="#"><i class="icon-note"></i></a>
                                                    <a href="#"><i class="icon-trash"></i></a>
                                                </div>
                                                <div class="col-sm-4 text-right">
                                                    <span class="date">12 Mar 2018</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="main-icon"><i class="main-icon icon-star"></i></div>
                                        <div class="content">
                                            <p><strong>Cheri Arya</strong> left a review  <span class="badge badge-danger badge-pill">2.0</span> on themeforest item.</p>
                                            <div class="row action align-items-center">
                                                <div class="col-sm-8">
                                                    <a href="#"><i class="icon-pencil"></i></a>
                                                    <a href="#"><i class="icon-note"></i></a>
                                                    <a href="#"><i class="icon-trash"></i></a>
                                                </div>
                                                <div class="col-sm-4 text-right">
                                                    <span class="date">11 Mar 2018</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="main-icon"><i class="main-icon icon-user"></i></div>
                                        <div class="content">
                                            <p><strong>Jenet Collins</strong> has created account on client portal.</p>
                                            <div class="row action align-items-center">
                                                <div class="col-sm-8">
                                                    <a href="#"><i class="icon-pencil"></i></a>
                                                    <a href="#"><i class="icon-note"></i></a>
                                                    <a href="#"><i class="icon-trash"></i></a>
                                                </div>
                                                <div class="col-sm-4 text-right">
                                                    <span class="date">27 Feb 2018</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="main-icon"><i class="main-icon icon-star"></i></div>
                                        <div class="content">
                                            <p><strong>John Doe</strong> left a review <span class="badge badge-warning badge-pill">3.8</span> on Ticket.</p>
                                            <div class="row action align-items-center">
                                                <div class="col-sm-8">
                                                    <a href="#"><i class="icon-pencil"></i></a>
                                                    <a href="#"><i class="icon-note"></i></a>
                                                    <a href="#"><i class="icon-trash"></i></a>
                                                </div>
                                                <div class="col-sm-4 text-right">
                                                    <span class="date">31 Jan 2018</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="main-icon"><i class="main-icon fa fa-ticket"></i></div>
                                        <div class="content">
                                            <p><strong>Emily Rasberry</strong> created support ticket for customization.</p>
                                            <div class="row action align-items-center">
                                                <div class="col-sm-8">
                                                    <a href="#"><i class="icon-pencil"></i></a>
                                                    <a href="#"><i class="icon-note"></i></a>
                                                    <a href="#"><i class="icon-trash"></i></a>
                                                </div>
                                                <div class="col-sm-4 text-right">
                                                    <span class="date">26 Jan 2018</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-head">
                            <div class="panel-title">
                                <div class="panel-title-text">Support Ticket</div>
                            </div>
                        </div>
                        <div class="panel-body"> 
                            <div class="ticket-list">
                                <div class="list">
                                    <div class="tbl-cell icon"><i class="bg-success">A</i></div>
                                    <div class="tbl-cell content">
                                        <h4>Arya Stark <span class="status text-success">Replied</span></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                    <div class="tbl-cell date">4 Days ago</div>
                                </div>
                                <div class="list">
                                    <div class="tbl-cell icon"><i class="bg-warning">J</i></div>
                                    <div class="tbl-cell content">
                                        <h4>John Snow <span class="status text-warning">Waiting for Reply</span></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                    <div class="tbl-cell date">4 Days ago</div>
                                </div>
                                <div class="list">
                                    <div class="tbl-cell icon "><i class="bg-dark">R</i></div>
                                    <div class="tbl-cell content">
                                        <h4>Robert Baratheon <span class="status text-dark">Closed</span></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                    <div class="tbl-cell date">4 Days ago</div>
                                </div>
                                <div class="list">
                                    <div class="tbl-cell icon "><i class="bg-secondary">H</i></div>
                                    <div class="tbl-cell content">
                                        <h4>House Tally <span class="status text-secondary">Unknown</span></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                    <div class="tbl-cell date">4 Days ago</div>
                                </div>
                                <div class="list">
                                    <div class="tbl-cell icon "><i class="bg-info">K</i></div>
                                    <div class="tbl-cell content">
                                        <h4>Khal Drogo <span class="status text-info">Replied</span></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                    <div class="tbl-cell date">4 Days ago</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>