
                   
                            <div class="container">
                                <div class="table-responsive-xl">
                                    <table class="table table-hover">
                                        <thead>
                                            <th scope="col">#</th>
                                            <th scope="col">Coin</th>
                                            <th scope="col">Symbol</th>
                                            <th class="coin" scope="col">Price</th>
                                            <th class="coin" scope="col">Circulating Supply</th>
                                            <th class="coin" scope="col">Total Supply</th>
                                            <th class="coin" scope="col">Market Cap</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td class="id">
                                                    <p>
                                                        <img src="{{$data[0]['image']}}" width="20px"> {{ ucfirst($data[0]['id'])}}
                                                    </p>
                                                </td>
                                                <td>  {{ strtoupper($data[0]['symbol'])}}</td>
                                                <td class="coin">${{ number_format($data[0]['current_price'])}}</td>
                                                <td>{{ number_format($data[0]['circulating_supply']) }}</td>
                                                <td>{{ number_format($data[0]['total_supply']) }}</td>
                                                <td>{{ number_format($data[0]['market_cap']) }}</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">2</th>
                                                <td class="id">
                                                    <p>
                                                        <img src="{{$data[1]['image']}}" width="20px"> {{ ucfirst($data[1]['id'])}}
                                                    </p>
                                                </td>
                                                <td>  {{strtoupper($data[1]['symbol'])}}</td>
                                                <td class="coin">${{ number_format($data[1]['current_price'])}}</td>
                                                <td>{{ number_format($data[1]['circulating_supply']) }}</td>
                                                <td>{{ number_format($data[1]['total_supply']) }}</td>
                                                <td>{{ number_format($data[1]['market_cap']) }}</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">3</th>
                                                <td class="id">
                                                    <p>
                                                        <img src="{{$data[2]['image']}}" width="20px"> {{ ucfirst($data[2]['id'])}}
                                                    </p>
                                                </td>
                                                <td>  {{strtoupper($data[2]['symbol'])}}</td>
                                                <td class="coin">${{ number_format($data[2]['current_price'])}}</td>
                                                <td>{{ number_format($data[2]['circulating_supply']) }}</td>
                                                <td>{{ number_format($data[2]['total_supply']) }}</td>
                                                <td>{{ number_format($data[2]['market_cap']) }}</td>
                                              </tr>
        
                                              <tr>
                                                <th scope="row">4</th>
                                                <td class="id">
                                                    <p>
                                                        <img src="{{$data[3]['image']}}" width="20px"> {{ ucfirst($data[3]['id'])}}
                                                    </p>
                                                </td>
                                                <td>  {{strtoupper($data[3]['symbol'])}}</td>
                                                <td class="coin">${{ number_format($data[3]['current_price'])}}</td>
                                                <td>{{ number_format($data[3]['circulating_supply']) }}</td>
                                                <td>{{ number_format($data[3]['total_supply']) }}</td>
                                                <td>{{ number_format($data[3]['market_cap']) }}</td>
                                              </tr>
        
                                              <tr>
                                                <th scope="row">5</th>
                                                <td class="id">
                                                    <p>
                                                        <img src="{{$data[4]['image']}}" width="20px"> {{ ucfirst($data[4]['id'])}}
                                                    </p>
                                                </td>
                                                <td>  {{strtoupper($data[4]['symbol'])}}</td>
                                                <td class="coin">${{ number_format($data[4]['current_price'])}}</td>
                                                <td>{{ number_format($data[4]['circulating_supply']) }}</td>
                                                <td>{{ number_format($data[4]['total_supply']) }}</td>
                                                <td>{{ number_format($data[4]['market_cap']) }}</td>
                                              </tr>
        
                                              <tr>
                                                <th scope="row">6</th>
                                                <td class="id">
                                                    <p>
                                                        <img src="{{$data[5]['image']}}" width="20px"> {{ ucfirst($data[5]['id'])}}
                                                    </p>
                                                </td>
                                                <td>  {{strtoupper($data[5]['symbol'])}}</td>
                                                <td class="coin">${{ number_format($data[5]['current_price'])}}</td>
                                                <td>{{ number_format($data[5]['circulating_supply']) }}</td>
                                                <td>{{ number_format($data[5]['total_supply']) }}</td>
                                                <td>{{ number_format($data[5]['market_cap']) }}</td>
                                              </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </div>