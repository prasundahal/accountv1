<table class="table align-items-center mb-0">
    <thead class="sticky" >
        <tr >
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SN</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Game Id </th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Fb Name</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Balance</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bonus</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Redeem</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tips</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">History</th>
            {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th> --}}
        </tr>
    </thead>
    <tbody>
        @if (isset($activeGame))
        @if (!empty($activeGame) && !empty($activeGame['form_games']))
        @php
        $count = 1;
        @endphp
        @foreach($formGames as $a => $num)
        <tr id="form-games-div-{{$a+1}}">
            <td>
                <div class="d-flex px-2 py-1 " >
                    <div class="d-flex  justify-content-center text-center">
                        <h6 class=" mb-0 text-sm" >{{$count++}}</h6>
                    </div>
                </div>
            </td>
            <td>
                <div class="d-flex px-2 py-1 " >
                    <a href="#popup1" class="user-full-history" data-gameId="{{($num['game_id'])}}" href="javascript:void(0);" data-userId="{{$num['form']['id']}}" data-game="{{$activeGame['id']}}">
                        <div class="d-flex  justify-content-center text-center">
                            <h6 class=" mb-0 text-sm" > {{($num['game_id'])}}</h6>
                        </div>
                    </a>
                    <div id="popup1" class="overlay">
                        <div class="popup">
                            <h2><span class="user-name">Users</span> History in {{(isset($activeGame) && $activeGame['id'] != '')?$activeGame['name']:''}}</h2>
                            <a class="close" href="#">&times;</a>
                            <div class="content ">
                                <div class="row" style="padding-top:20px;">
                                    <div class="col-12">
                                        <div class="card mb-4">
                                            <div class="card-header pb-0">
                                                {{-- <h6>Authors table</h6> --}}
                                                <div class="row w-100" style="justify-content: space-around;">
                                                    <div class="col-2">
                                                        <button class="btn btn-success history-type-change-btn" data-userId="" data-game="" data-type="all">All</button>
                                                    </div>
                                                    <div class="col-2">
                                                        <button class="btn btn-success history-type-change-btn" data-userId="" data-game="" data-type="load">Load</button>
                                                    </div>
                                                    <div class="col-2">
                                                        <button class="btn btn-success history-type-change-btn" data-userId="" data-game="" data-type="redeem">Redeem</button>
                                                    </div>
                                                    <div class="col-2">
                                                        <button class="btn btn-success history-type-change-btn" data-userId="" data-game="" data-type="refer">Bonus</button>
                                                    </div>
                                                    <div class="col-2">
                                                        <button class="btn btn-success history-type-change-btn" data-userId="" data-game="" data-type="tip">Tip</button>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="type" class="user-current-game-history-input">
                                                {{-- <div class="col-4">
                                                    <select name="type" id="" class="filter-type">
                                                        <option value="all">All</option>
                                                        <option value="load">Load</option>
                                                        <option value="redeem">Redeem</option>
                                                        <option value="refer">Bonus</option>
                                                        <option value="tip">Tip</option>
                                                    </select>
                                                </div> --}}
                                            </div>
                                            <div class="card-body px-0 pt-0 pb-2">
                                                <div class="row display-inline-flex">
                                                    <div class="col-4">
                                                        <input type="date" name="start" class="filter-start">
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="date" name="end" class="filter-end">
                                                    </div>
                                                    <div class="col-4">
                                                        <button class="filter-history btn btn-primary" data-userId="" data-game="">Go</button>
                                                    </div>
                                                </div>
                                                <div class="table-responsive p-0">
                                                    <table class="table align-items-center mb-0">
                                                        <thead class="sticky" >
                                                            <tr  >
                                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Amoount</th>
                                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Type</th>
                                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created by</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody  class="user-history-body">
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            <td class="text-center hidden">
                <button class="btn btn-primary amountBtn user-cashapp-{{($num['game_id'])}} resetThis" type="button" data-toggle="collapse" data-target="#collapseExampleCashApp-{{$a+1}}" aria-expanded="false" aria-controls="collapseExampleCashApp-{{$a+1}}" data-id="{{($num['form']['id'])}}" data-parent="{{'#form-games-div-'.($a+1)}}" data-user="{{($num['game_id'])}}" data-balance="{{(isset($num['cash_app']) && !empty($num['cash_app']))?$num['cash_app']:'0'}}">
                    $ {{(isset($num['cash_app']) && !empty($num['cash_app']))?$num['cash_app']:'0'}}
                </button>
                <div class="collapse-{{$a+1}} collapse" id="collapseExampleCashApp-{{$a+1}}">
                    <div class="card card-body">
                        <input required type="hidden" class="form-control cashApp-from" name="cashApp-from" value="{{$activeGame['id']}}" data-title="{{str_replace(' ','-',$activeGame['title'])}}">
                        <input required type="text" class="form-control amount" name="amount" data-user="{{$num['game_id']}}" data-cashApp="{{$activeCashApp['id']}}" data-userId="{{$num['form']['id']}}" value="" placeholder="Amount">
                        <button type="button" class="btn btn-success text-center cashApp-btn" data-user="{{$num['game_id']}}" data-cashApp="{{$activeCashApp['id']}}" data-userId="{{$num['form']['id']}}">
                            Load
                        </button>
                    </div>
                </div>
            </td>
            <td>
                <a href="#popup2" class="form-full-history" data-gameId="{{($num['game_id'])}}"  data-userId="{{$num['form']['id']}}" data-game="{{$activeGame['id']}}">
                    <div class="d-flex px-2 py-1  align-middle text-center" >
                        <div class="d-flex  justify-content-left">
                            <h6 class=" mb-0 text-sm" >
                                {{(isset($num['form']['facebook_name']) && !empty($num['form']['facebook_name']))?$num['form']['facebook_name']:'Empty'}}
                            </h6>
                        </div >
                    </div >
                </a>
                <div id="popup2" class="overlay">
                    <div class="popup">
                        <h2><span class="user-name">Users</span> All History</h2>
                        <a class="close" href="#">&times;</a>
                        <div class="content ">
                            <div class="row" style="padding-top:20px;">
                                <div class="col-12">
                                    <div class="card mb-4">
                                        {{-- <div class="card-header pb-0">
                                            <h6>Authors table</h6>
                                        </div> --}}
                                        <div class="card-body px-0 pt-0 pb-2">
                                            <div class="row">
                                                <div class="col-xl-4 col-sm-12 mb-xl-0 mb-4">
                                                    <div class="card">
                                                        <div class="card-body p-3">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="d-flex flex-column">
                                                                            <h6 class="mb-1 text-dark text-sm">Total Tip : <span class="total-tip">0</span> </h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-12 mb-xl-0 mb-4">
                                                    <div class="card">
                                                        <div class="card-body p-3">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="d-flex flex-column">
                                                                            <h6 class="mb-1 text-dark text-sm">Total Balance : <span class="total-balance">0</span>  </h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-12 mb-xl-0 mb-4">
                                                    <div class="card">
                                                        <div class="card-body p-3">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="d-flex flex-column">
                                                                            <h6 class="mb-1 text-dark text-sm">Total Redeem : <span class="total-redeem">0</span> </h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-12 mb-xl-0 mb-4">
                                                    <div class="card">
                                                        <div class="card-body p-3">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="d-flex flex-column">
                                                                            <h6 class="mb-1 text-dark text-sm">Total Bonus : <span class="total-refer">0</span> </h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-12 mb-xl-0 mb-4">
                                                    <div class="card">
                                                        <div class="card-body p-3">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="d-flex flex-column">
                                                                            <h6 class="mb-1 text-dark text-sm">Total Amount : <span class="total-amount">0</span></h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-12 mb-xl-0 mb-4">
                                                    <div class="card">
                                                        <div class="card-body p-3">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="d-flex flex-column">
                                                                            <h6 class="mb-1 text-dark text-sm">Total Profit : <span class="total-profit">0</span> </h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row w-100" style="justify-content: space-around;">
                                                <div class="col-2">
                                                    <button class="btn btn-success history-type-change-btn form-all" data-userId="" data-game="" data-type="all">All</button>
                                                </div>
                                                <div class="col-2">
                                                    <button class="btn btn-success history-type-change-btn form-all" data-userId="" data-game="" data-type="load">Load</button>
                                                </div>
                                                <div class="col-2">
                                                    <button class="btn btn-success history-type-change-btn form-all" data-userId="" data-game="" data-type="redeem">Redeem</button>
                                                </div>
                                                <div class="col-2">
                                                    <button class="btn btn-success history-type-change-btn form-all" data-userId="" data-game="" data-type="refer">Bonus</button>
                                                </div>
                                                <div class="col-2">
                                                    <button class="btn btn-success history-type-change-btn form-all" data-userId="" data-game="" data-type="tip">Tip</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <input type="hidden" name="type" class="user-current-game-history-input">
                                                {{-- <div class="col-4"> --}}
                                                    {{-- <select name="type" id="" class="filter-type1">
                                                        <option value="all">All</option>
                                                        <option value="load">Load</option>
                                                        <option value="redeem">Redeem</option>
                                                        <option value="refer">Bonus</option>
                                                        <option value="tip">Tip</option>
                                                    </select> --}}
                                                    {{-- </div> --}}
                                                    <div class="col-4">
                                                        <input type="date" name="start" class="filter-start1">
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="date" name="end" class="filter-end1">
                                                    </div>
                                                    <div class="col-4">
                                                        <button class="btn btn-primary filter-history form-all " data-userId="" data-game="">Go</button>
                                                    </div>
                                                </div>
                                                <div class="table-responsive p-0">
                                                    <table class="table align-items-center mb-0">
                                                        <thead class="sticky" >
                                                            <tr  >
                                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Game</th>
                                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Amoount</th>
                                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Type</th>
                                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created by</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody  style="text-align: center!important;" class="user-history-body">
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div >
                        </div >
                    </div >
                </div>
            </td>
            <td style="width:130px;text-align:center">
                <div class="col-sm-12 col-md-12 col-lg-6 hidden">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle cash-app-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        data-id="{{($activeCashApp['id'])}}"
                        data-title="{{($activeCashApp['title'])}}"
                        data-balance="{{($activeCashApp['balance'])}}"
                        >
                        Cash App Account : {{(isset($activeCashApp) && !empty($activeCashApp))?$activeCashApp['title']:''}} : <span class="cash-app-blnc">{{(isset($activeCashApp) && !empty($activeCashApp))?('$ '.$activeCashApp['balance']):''}}</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @if (isset($cashApp) && !empty($cashApp))
                        @foreach ($cashApp as $item)
                        @php
                        $query = $_GET;
                        $query['cash_app'] = $item['title'];
                        $query_result = http_build_query($query);
                        @endphp
                        <a class="dropdown-item" href="{{url('/table?').$query_result}}">{{$item['title']}} : $ {{$item['balance']}}</a>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <span class="user-{{($num['game_id'])}} resetThis" data-balance="{{($num['balance'])}}" data-type="load">$ {{($num['balance'])}}</span>
            <div class="card card-body">
                <input required type="hidden" class="form-control load-from loadFrom{{$num['form']['id']}}" name="load-from" value="{{$activeGame['id']}}" data-title="{{str_replace(' ','-',$activeGame['title'])}}">

                <input required type="text" class="form-control loadInput loadInput{{$num['form']['id']}}" name="amount" data-user="{{$num['game_id']}}" data-userId="{{$num['form']['id']}}" value="" placeholder="Amount">

                <button type="button" class="btn btn-success text-center hidden load-btn" data-user="{{$num['game_id']}}" data-userId="{{$num['form']['id']}}">Load</button>
            </div>
        </td>
        <td  style="width:130px;text-align:center">
            <span class="user-refer-{{($num['game_id'])}} resetThis" data-balance="{{($num['refer'])}}" data-type="refer">$ {{$num['refer']}}</span>
            <div class="card card-body">
                <input required type="hidden" class="form-control refer-from" name="refer-from" value="{{$activeGame['id']}}" data-title="{{str_replace(' ','-',$activeGame['title'])}}">
                <input required type="text" class="form-control referInput referInput{{$num['form']['id']}}" name="amount" data-user="{{$num['game_id']}}" data-userId="{{$num['form']['id']}}" value="" placeholder="Amount">
                <button type="button" class="btn btn-success text-center refer-btn hidden" data-user="{{$num['game_id']}}" data-userId="{{$num['form']['id']}}">Load</button>
            </div>
        </td>
        <td  style="width:130px;text-align:center">
            <span class="user-redeem-{{($num['game_id'])}} resetThis" data-balance="{{($num['redeem'])}}" data-type="redeem">$ {{($num['redeem'])}}</span>
            <div class="card card-body">
                <input required type="hidden" class="form-control redeem-from redeemFrom{{$num['form']['id']}}" name="redeem-from" value="{{$activeGame['id']}}" data-title="{{str_replace(' ','-',$activeGame['title'])}}">
                <input required type="text" class="form-control redeemInput redeemInput{{$num['form']['id']}}" name="amount" data-user="{{$num['game_id']}}" data-userId="{{$num['form']['id']}}" value="" placeholder="Amount">
                <button type="button" class="btn btn-success text-center redeem-btn hidden" data-user="{{$num['game_id']}}" data-userId="{{$num['form']['id']}}">Redeem</button>
            </div>
        </td>
        <td  style="width:130px;text-align:center">
            <span class="user-tip-{{($num['game_id'])}} resetThis" data-balance="{{($num['tip'])}}" data-type="tip">$ {{$num['tip']}}</span>
            <div class="card card-body">
                <input required type="hidden" class="form-control tip-from" name="tip-from" value="{{$activeGame['id']}}" data-title="{{str_replace(' ','-',$activeGame['title'])}}">
                <input required type="text" class="form-control tipInput tipInput{{$num['form']['id']}}" name="amount" data-user="{{$num['game_id']}}" data-userId="{{$num['form']['id']}}" value="" placeholder="Amount">
                <button type="button" class="btn btn-success text-center tip-btn hidden" data-user="{{$num['game_id']}}" data-userId="{{$num['form']['id']}}">Tip</button>
            </div>
        </td>
        <td  style="width:130px;text-align:center" class=" text-center ">
            <button type="button" class="btn btn-success text-center thisBtn load-btn-{{$num['form']['id']}}"
            data-user="{{$num['game_id']}}"
            data-userId="{{$num['form']['id']}}"
            data-cashApp="{{$activeCashApp['id']}}"
            style="background-color:#FF9800;"  >Load</button>
        </td>
        <td class=" text-center ">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                View
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="left: -75px!important;">
                {{-- <a class="dropdown-item user-history" href="javascript:void(0);" data-type="cash" data-userId="{{$num['form']['id']}}" data-game="{{$num['form']['id']}}">Cash App</a> --}}
                <a class="dropdown-item remove-form-game" href="javascript:void(0);" data-tr="{{$a+1}}" data-type="load" data-userId="{{$num['form']['id']}}" data-game="{{$activeGame['id']}}"> Remove</a>
                <a href="#popup4" class="dropdown-item user-history" data-type="load" data-userId="{{$num['form']['id']}}" data-game="{{$activeGame['id']}}">Balance Load</a>
                <a href="#popup4" class="dropdown-item user-history" data-type="redeem" data-userId="{{$num['form']['id']}}" data-game="{{$activeGame['id']}}">Redeems</a>
            </div>
            <div id="popup5" class="overlay">
                <div class="popup">
                    <h2><span class="user-name">Users</span> Load History</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content ">
                        <div class="row" style="padding-top:20px;">
                            <div class="col-12">
                                <div class="card mb-4">
                                    <div class="card-header pb-0">
                                        <h6>Authors table</h6>
                                    </div>
                                    <div class="card-body px-0 pt-0 pb-2">
                                        <div class="table-responsive p-0">
                                            <table class="table align-items-center mb-0">
                                                <thead class="sticky" >
                                                    <tr  >
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Amoount</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created by</th>
                                                    </tr>
                                                </thead>
                                                <tbody  style="text-align: center!important;" class="user-history-body">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div >
                </div >
            </div >
            <div id="popup4" class="overlay">
                <div class="popup">
                    <h2><span class="user-name">Users</span> <span class="load-type">Load</span> History</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content ">
                        <div class="row" style="padding-top:20px;">
                            <div class="col-12">
                                <div class="card mb-4">
                                    <div class="card-header pb-0">
                                        <h6>Authors table</h6>
                                    </div>
                                    <div class="card-body px-0 pt-0 pb-2">
                                        <div class="table-responsive p-0">
                                            <table class="table align-items-center mb-0">
                                                <thead class="sticky" >
                                                    <tr  >
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Amoount</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created by</th>
                                                    </tr>
                                                </thead>
                                                <tbody  style="text-align: center!important;" class="user-history-body">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div >
                </div >
            </div >
        </td>
    </tr>
    @endforeach
    @else
    <tr>
        <td> No Users in this game.</td>
    </tr>
    @endif
    @else
    <tr>
        <td>Please choose a game first.</td>
    </tr>
    @endif
</tbody>
</table>
<div class="mt-3 text-center">
    {{ $formGames->render() }}
</div>
