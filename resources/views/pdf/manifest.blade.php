@extends('pdf.components.layout')
<link rel="stylesheet" href="{{ public_path('pdf/css/manifest.css') }}"/>

@section('content')
    <div class="manifest">
        <table class="manifest_header">
            <tr>
                <td style="padding-right: 25px"><img class="img--logo" src="https://picsum.photos/50/50" alt="">
                </td>
                <td><strong>Washington Marijuana Transportation Manifest</strong></td>
            </tr>
        </table>

        <div style="margin-top: 20px" class="data">
            <table class="semibold w-100">
                <tr>
                    <td class="text-left">Item 1-3</td>
                    <td class="text-right">Manifest ID:</td>
                </tr>
            </table>
            <table style="table-layout: fixed"  class="table--data">
                <thead>
                <tr>
                    <th class="text-center" style="width: 50px; padding-right: 0">#</th>
                    <th>Barcode</th>
                    <th>Batch / Lot ID</th>
                    <th style="width: 220px">Description</th>
                    <th class="text-center">Shipped</th>
                    <th class="text-center">Received</th>
                </tr>
                </thead>
                <tbody>
                @for ($i = 0; $i < 20; $i++)
                    <tr>
                        <td class="text-center" style="padding-right: 0">{{$i}}</td>
                        <td style="padding-left: 0;padding-right: 10px;" class="semibold"> <img  style="margin-top: 15px;margin-bottom: 15px; width: 100%;" src="data:image/png;base64,{{ DNS1D::getBarcodePNG('4', 'C39+') }}"   alt=""/></td>
                        <td class="semibold">1A4FF030000025A000000240</td>
                        <td>12th Man Down 12th Man Down 12th Man Down 12th Man Down 12th Man Down</td>
                        <td class="text-center">300</td>
                        <td class="text-center"><img
                                src="{{$i % 2 ? public_path('pdf/icon/checkbox-checked.png') : public_path('pdf/icon/checkbox.png')}}"
                                width="25"
                                height="25"/>
                        </td>
                    </tr>
                @endfor


                </tbody>

            </table>
        </div>

    </div>
@endsection
