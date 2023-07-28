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
        <div class="information-container">


            <table class="table--text caption">
                <tr>
                    <td>
                        <div>
                            <img src="{{public_path('pdf/icon/barcode.png')}}" width="135" height="40"/>
                            <table class="table--text caption">
                                <tr>
                                    <td style="width: 85px" class="color-primary-dark">Sender Name:</td>
                                    <td class="semibold"> SoftDreams_Processor</td>
                                </tr>
                                <tr>
                                    <td class="color-primary-dark">Sender Address:</td>
                                    <td class="semibold"> 2118 Thornridge Cir. Syracuse, Connecticut 35624 Thornridge
                                        Cir.
                                        Syracuse, ConneThornridge Cir. Syracuse, Conne
                                    </td>
                                </tr>
                                <tr>
                                    <td class="color-primary-dark">Date:</td>
                                    <td class="semibold"> 05/05/2021</td>
                                </tr>
                            </table>
                            <br>
                            <hr>
                            <table class="table--text caption">
                                <tr>
                                    <td style="width: 160px" class="color-primary-dark">Destination Licensee #:</td>
                                    <td class="semibold"> M1837</td>
                                </tr>
                                <tr>
                                    <td class="color-primary-dark">Destination Licensee Name:</td>
                                    <td class="semibold">Johansen & Associates, LLC Producer</td>
                                </tr>
                                <tr>
                                    <td class="color-primary-dark">Destination Licensee Address:
                                    </td>
                                    <td class="semibold">4517 Washington Ave. Manchester, Kentucky 39495 chester,
                                        Kentucky
                                        39495
                                        chester, Kentucky 39495
                                    </td>
                                </tr>
                                <tr>
                                    <td class="color-primary-dark">Destination Licensee Phone:</td>
                                    <td class="semibold">089 456 4865</td>
                                </tr>
                            </table>
                            <br>
                            <hr>
                            <table class="caption">
                                <tr>
                                    <td>
                                        <table>
                                            <tr class="align-middle">
                                                <td>
                                                    <div class="color-primary-dark">Approx. Departure Date/Time</div>
                                                    <div class="semibold">03/11/2020 9:19 am</div>
                                                </td>
                                                <td class="align-middle" style="padding: 7px 40px 0 10px">
                                                    <img
                                                        src="{{public_path('pdf/icon/delivery-icon.png')}}" width="25"
                                                        height="25"/>
                                                </td>
                                            </tr>
                                            {{}}
                                        </table>

                                    </td>
                                    <td>
                                        <table>
                                            <tr class="align-middle">
                                                <td>
                                                    <div class="color-primary-dark">Approx. Departure Date/Time</div>
                                                    <div class="semibold">03/11/2020 9:19 am</div>
                                                </td>
                                                <td class="align-middle" style="padding: 7px 0 0 10px">
                                                    <img
                                                        style="transform: scaleX(-1)"
                                                        src="{{public_path('pdf/icon/delivery-icon.png')}}" width="25"
                                                        height="25"/>
                                                </td>
                                            </tr>
                                        </table>

                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                    <td style="width: 230px; padding-left: 20px">
                        <table class="table--text caption"
                               style="background-color: #F8F9FB; border-radius: 12px; padding: 10px 15px">
                            <tr>
                                <td style="width: 85px">Driver’s Name:</td>
                                <td class="semibold">Marcos Harris</td>
                            </tr>
                            <tr>
                                <td>Date of Birth:</td>
                                <td class="semibold">01/22/1980</td>
                            </tr>
                            <tr>
                                <td>License #:</td>
                                <td class="semibold">No Data</td>
                            </tr>
                            <tr>
                                <td>Vehicle Make:</td>
                                <td class="semibold">DeLorean</td>
                            </tr>
                            <tr>
                                <td>Vehicle Model:</td>
                                <td class="semibold">DMC-12</td>
                            </tr>
                            <tr>
                                <td>Vehicle Color:</td>
                                <td class="semibold">Silver</td>
                            </tr>
                            <tr>
                                <td>Vehicle Plate:</td>
                                <td class="semibold">XCXXXXXX</td>
                            </tr>
                            <tr>
                                <td>Vehicle VIN:</td>
                                <td class="semibold"> Vehicle ID#Vehicle ID#Vehicle ID#Vehicle ID#Vehicle ID#</td>
                            </tr>
                            <tr>
                                <td>Transporter ID:</td>
                                <td class="semibold">No Data</td>
                            </tr>
                            <tr>
                                <td>Signature:</td>
                                <td class="semibold"></td>
                            </tr>

                        </table>
                    </td>
                </tr>
            </table>
        </div>

        <div class="travel-route">
            <h2 class="subTitle2" style="margin-bottom: -5px">Travel Route</h2>
            <table>
                <tr class="align-middle">
                    <td>
                        <img src="{{public_path('pdf/icon/warning-icon.png')}}" width="12"
                             height="12"/>
                    </td>
                    <td><p class="color-primary-dark">These directions are for planning purposes only. You may find that
                            the suggested route takes
                            you outside
                            the State of Washington; per RCW 69.50.342 you must plan your route so that you remain
                            within the State
                            of Washington at all times.</p></td>
                </tr>
            </table>
            <p style="margin-top: -5px">
                Head south on N Woodruff Rd toward E Jackson Ave. Turn right onto E Montgomery Ave. Turn left onto N
                Argonne Rd. Pass by Jack in the Box (on the right). Turn right to merge onto I-90 W toward Spokane. Keep
                left to stay on I-90 W. Take exit 25 for WA-18 W toward Auburn/Tacoma. Turn left onto Echo Glen Rd.
                Continue onto WA-18 W. Take the Interstate 5 S exit.Merge onto I-5 S. Take exit 116 for Mounts Rd toward
                Old Nisqually. Turn left onto Mounts Rd SW/Nisqually Rd SW/Old Pacific Hwy SEContinue to follow Old
                Pacific Hwy SE. Turn left onto Reservation Rd SE. At the traffic circle, take the 2nd exit onto WA-510
                E. At the traffic circle, take the 2nd exit onto WA-510 E/Yelm Hwy.
            </p>
            <p class="semibold color-primary-dark">
                Instructions: If the quantity received is less than the quantity shipped, check the box in the
                appropriate field below and indicate the actual quantity received.
            </p>
        </div>
        <div style="margin-top: 20px" class="data">
            <table class="semibold w-100">
                <tr>
                    <td class="text-left">Item 1-3</td>
                    <td class="text-right">Manifest ID:</td>
                </tr>
            </table>
            <table class="table--data">
                <thead>
                <tr>
                    <th class="text-center" style="width: 50px; padding-right: 0">#</th>
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
                        <td class="semibold">WAJ10936.IN4X8H</td>
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
