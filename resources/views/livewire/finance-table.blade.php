<div style="width: 100%">
    
    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Primary </span>
                <h2>Dashboard</h2>
            </div>
            @include('livewire.finance.search-finance')
        </div>

        <div class="card--container">
            <h3 class="main--title">Today's Data</h3>
            <div class="card--wrapper">
                @foreach ($top as $items)
                    
               
                <div class="payment--card {{$items->color}}">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                                Payment Amount
                            </span>
                            <span class="amount--value">{{$items->amount}}</span>
                            
                        </div>
                        <i class='icon {{$items->icon}}'></i>
                    </div>
                    <span class="card-detail">**** ***** **** 3478</span>
                </div>
                @endforeach

            </div>
            
        </div>
        <div class="tabular--wrapper">
            <h3 class="main--title">Finance Data</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                           
                            <th>
                                Data
                            </th>
                            <th>
                                Transaction Type
                            </th>
                            <th>
                                Description
                            </th>
                            <th>
                                amount
                            </th>
                            <th>
                                category
                            </th>
                            <th>
                                status
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                   
                        <tbody>
                           
                            @foreach($data as $item)
                            <tr wire:key ='{{$item->id}}'>
                            <td>{{ $item->created_at}}</td>
                            <td>{{ $item->category }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->amount }}</td>
                            <td>{{ $item->category }}</td>
                            <td>{{ $item->status }}</td>
                                
                                <td>
                                   <button>Edit</button>
                                </td>
                            </tr>
                                @endforeach
                        </tbody>
                       
                       
                        <tfoot>
                            <tr>
                                <td colspan = '5'>
                                    Total: ${{$total}}
                                </td>
                                <td colspan = '2'>
                                    
                                    {{$data->links()}}
                             
                                </td>
                            </tr>
                        </tfoot>
                      
                </table>
                
        
                </div>
            </div>
        </div>

    </div>
</div>
