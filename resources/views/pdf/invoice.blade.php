@extends('pdf.components.layout')
@section('content')
    <h1 class="title">Invoice</h1>
    <hr>
    <table style="margin: 20px 0">
        <tr>
            <td style="width: 410px">
                <table>
                    <tr>
                        <td class="align-top" style="padding-top: 10px; width: 65px">
                            <img class="img--logo" src="https://picsum.photos/50/50" alt="">
                        </td>
                        <td>
                            <div class="subTitle">Grow OP Farms</div>
                            <div>2611 N Woodruff Rd STE B Spokane Valley,
                                WA 992064138
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
            <td style="padding-left: 30px">
                <table>
                    <tr>
                        <td>Order #:</td>
                        <td style="padding-left: 12px"><strong>8561 837</strong></td>
                    </tr>
                    <tr>
                        <td>Order Date:</td>
                        <td style="padding-left: 12px"><strong>12/20/2022</strong></td>
                    </tr>
                    <tr>
                        <td>Created By:</td>
                        <td style="padding-left: 12px"><strong>Sales Support Team</strong></td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
    <hr>
    <table style="margin: 20px 0">
        <tr>
            <td style="width: 410px">
                <div class="semibold caption">SHIP TO</div>

                <div style="line-height: 18px" class="subTitle">

                    SoftDreams_Processor

                </div>
                <div>9724 Aurora Ava N Seattle, WA 981033223</div>
                <div>Phone: 2067907036</div>

                <table>
                    <tr>
                        <td class="text-nowrap">License #:</td>
                        <td style="padding-left: 12px"><strong>M1837 </strong></td>
                        <td style="padding-left: 30px" class="semibold text-nowrap text-uppercase">Arrival date</td>
                    </tr>
                    <tr>
                        <td class="text-nowrap">UBI:</td>
                        <td style="padding-left: 12px"><strong>4564 4898 46
                            </strong></td>
                        <td class="semibold align-top" style="padding-left: 30px">12/20/2022</td>

                    </tr>

                </table>

            </td>
            <td class="align-top" style="padding-left: 30px">
                <div class="semibold caption">MANIFEST DETAILS</div>
                <table>
                    <tr class="align-top">
                        <td class="text-nowrap">Manifest #:</td>
                        <td><strong>WAJ413287.IT2I3JS</strong></td>
                    </tr>
                    <tr class="align-top">
                        <td>Driver:</td>
                        <td><strong>Levi Shulda Haddad</strong></td>
                    </tr>
                    <tr class="align-top">
                        <td>Vehicle:</td>
                        <td><strong>2017 White
                                <br>
                                Ram Promaster
                                <br>
                                Plate: C70022J</strong></td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>
    <hr>

    <table class="table--data">
        <thead>
        <tr>
            <th class="text-center" style="width: 50px; padding-right: 0">#</th>
            <th style="width: 220px">Product</th>
            <th>Lot</th>
            <th class="text-right">Unit Price</th>
            <th class="text-right">Units</th>
            <th style="width: 100px">Line Total</th>
        </tr>
        </thead>
        <tbody>
        @for ($i = 0; $i < 20; $i++)
            <tr>
                <td class="text-center" style="padding-right: 0">{{$i}}</td>
                <td class="semibold">Panda Pod - Dutch Treat 0.5g da Pod - Dutch Trea</td>
                <td>WAJ413287.INYTU4S</td>
                <td class="text-right">$0.65</td>
                <td class="text-right">2163</td>
                <td>$1405.95</td>
            </tr>
        @endfor


        </tbody>
        <tfoot>
        <tr>
            <td style="border-bottom: none" colspan="3"></td>
            <td class="semibold" colspan="2" style="padding-left: 10px">Order Totals</td>
            <td class="semibold">$1,014,288.95</td>
        </tr>
        <tr>
            <td style="border-bottom: none" colspan="3"></td>
            <td class="semibold" colspan="2" style="padding-left: 10px">Amount Due</td>
            <td class="semibold">$1,014,288.95</td>
        </tr>
        </tfoot>
    </table>

@endsection
