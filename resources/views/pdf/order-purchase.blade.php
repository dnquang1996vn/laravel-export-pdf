@extends('pdf.components.layout')
@section('content')
    <h1 class="title">Purchase Order</h1>
    <hr>
    <table class="table--text" style="margin: 15px 0">
        <tr>
            <td style="width: 410px">
                <table class="table--text">
                    <tr>
                        <td style="vertical-align: top; padding-top: 10px; width: 65px">
                            <img class="img--logo" src="https://picsum.photos/50/50" alt="">
                        </td>
                        <td>
                            <div class="subTitle">Grow OP Farms</div>
                            <div>2611 N Woodruff Rd STE B Spokane Valley,
                                WA 992064138 2611 N Woodruff Rd STE B Spokane Valley,
                                WA 992064138
                                2611 N Woodruff Rd STE B Spokane Valley,
                                WA 992064138

                            </div>
                        </td>
                    </tr>
                </table>
            </td>
            <td style="padding-left: 30px">
                <table class="table--text">
                    <tr>
                        <td style="width: 79px">Order #:</td>
                        <td style="padding-left: 12px"><span class="semibold">8561 837 8561 837 8561 8378561 837 8561 837</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Order Date:</td>
                        <td style="padding-left: 12px"><span class="semibold">12/20/2022</span></td>
                    </tr>
                    <tr>
                        <td>Created By:</td>
                        <td style="padding-left: 12px"><span class="semibold">Sales Support Team Sales Support Team Sales Support Team
                                Sales Support Team</span></td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
    <hr>
    <table style="margin: 15px 0">
        <tr>
            <td style="vertical-align: top; width: 370px ">
                <div class="semibold caption">SHIP TO</div>

                <div style="line-height: 18px" class="subTitle">

                    SoftDreams_Processor

                </div>
                <div>9724 Aurora Ava N Seattle, WA 981033223 9724 Aurora Ava N Seattle, WA 981033223 9724 Aurora Ava N
                    Seattle, WA 981033223
                </div>
                <div>Phone: 2067907036</div>
                <div class="semibold caption">Est. Delivery Date</div>
                <div class="semibold subTitle2">12/20/2022</div>
            </td>
            <td style="padding-left: 70px;width: 20%; vertical-align: top">
                <table class="table--text">
                    <tr>
                        <td>License #:</td>
                        <td style="padding-left: 12px"><span class="semibold">M1837</span></td>
                    </tr>
                    <tr>
                        <td>UBI:</td>
                        <td style="padding-left: 12px"><span
                                class="semibold">4564 4898 46 564 4898 46 564 4898 46</span></td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>
    <hr>

    <table class="table--data">
        <thead>
        <tr>
            <th style="width: 50px;text-align: center">#</th>
            <th style="width: 250px">Product</th>
            <th style="text-align: right">Unit Price</th>
            <th style="text-align: right">Units</th>
            <th>Line Total</th>
        </tr>
        </thead>
        <tbody>
        @for ($i = 0; $i < 20; $i++)
            <tr>
                <td style="text-align: center">{{$i}}</td>
                <td style="font-size: 12px"> 12th Man Down 12th Man Down 12th Man Down 12th Man Down 12th Man Down</td>
                <td style="text-align: right">$0.65</td>
                <td style="text-align: right">4433</td>
                <td>$1405.95</td>
            </tr>
        @endfor


        </tbody>
        <tfoot>
        <tr>
            <td style="border-bottom: none" colspan="2"></td>
            <td></td>
            <td class="semibold">Order Totals</td>
            <td class="semibold">$1,014,288.95</td>
        </tr>
        <tr>
            <td style="border-bottom: none" colspan="2"></td>
            <td></td>
            <td class="semibold">Amount Due</td>
            <td class="semibold">$1,014,288.95</td>
        </tr>
        </tfoot>
    </table>

@endsection
