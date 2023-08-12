<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta name="x-apple-disable-message-reformatting"/>
    <!--[if !mso]><!-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!--<![endif]-->
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text:ital,wght@0,400;0,500;0,600;1,400&display=swap"
          rel="stylesheet"/>
    <!--[if mso]>
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            border: none;
            margin: 0;
        }

        div,
        td {
            padding: 0;
        }

        .th, .td {
            text-align: left;
            height: 45px;
            border-radius: 4px;
            border-bottom: 1px solid #EEF1F8;
            /*border: 1px solid #EEF1F8;*/
            word-wrap: break-word;
            padding-right: 15px;
        }

        div {
            margin: 0 !important;
        }

        .text-p a {
            color: #636664 !important;
        }

    </style>
    <noscript>
        <xml>
            <o:OfficeDocumentSettings>
                <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
    </noscript>
    <![endif]-->
    <style>
        table,
        td,
        div,
        h1,
        h2,
        h3,
        h4,
        h5 p,
        span {
            font-family: 'Red Hat Text', Arial, Helvetica, sans-serif;
        }

        a {
            text-decoration: none;
        }

        @media screen and (max-width: 460px) {
            .two-col .column {
                max-width: 100% !important;
            }
        }

        @media screen and (max-width: 768px) {
            .text-h1 {
                font-size: 30px !important;
                line-height: 36px !important;
            }

            .text-h4 {
                font-size: 17px !important;
                line-height: 24px !important;
            }
        }

        @media screen and (min-width: 461px) {
            .two-col .column {
                max-width: 50% !important;
            }
        }
    </style>
</head>
<body style="margin: 0; padding: 0; word-spacing: normal; background-color: #e4efeb">
<div
    role="article"
    aria-roledescription="email"
    lang="en"
    style="text-size-adjust: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; background-color: #e4efeb"
>
    <table style="background-color: #E4EFEB; width: 100%; box-sizing: border-box; border-collapse: collapse;">
        <thead>
        @if(!empty($accountHolder['logo_url']))
            <tr>
                <th style="padding: 30px 0; vertical-align: middle;">
                    <h1 style="margin: 0; padding: 0">
                        <img
                            src="{{ $accountHolder['logo_url'] }}"
                            alt="Logo"
                            width="150px"
                            style="width: 244px; height: 170px; object-fit: contain; max-width: 80%; border: none; text-decoration: none; color: #ffffff"
                        />
                    </h1>
                </th>
            </tr>
        @endif
        </thead>
        <tbody>
        <tr>
            <td style="padding: 0 40px">
                <table style="width: 100%; background-color: white; border-collapse: collapse">
                    <tbody>
                    <tr>
                        <td style="padding: 50px 60px;">
                            <h2 style="margin-bottom: 12px; font-family:  'Red Hat Text', Arial, Helvetica, sans-serif; font-style: normal; font-weight: bold; font-size: 19px; line-height: 24px; color: #006262; word-break: break-all;">
                                {{ $contact['first_name'] ? sprintf('Hi %s,', $contact['first_name']) : 'Hi,' }}
                            </h2>
                            <p class="text-p"
                               style="margin-top: 0; margin-bottom: 20px; font-family:  'Red Hat Text', Arial, Helvetica, sans-serif; font-style: normal; font-weight: 400; font-size: 14px; line-height: 20px; color: #636664 !important;">
                                @if(true === $attachInvoice)
                                    {{ $accountHolder['name'] }} (<a href="mailto:{{ $senderEmail }}"
                                                                     style="color: #006262; text-decoration: underline; word-break: break-all">{{ $senderEmail }}</a>
                                    ) has sent you the invoice.
                                @else
                                    {{ $accountHolder['name'] }} (<a href="mailto:{{ $senderEmail }}"
                                                                     style="color: #006262; text-decoration: underline; word-break: break-all">{{ $senderEmail }}</a>
                                    ) has sent you the WCIA Transfer Data Link.
                                @endif
                            </p>
                            <h2 style="margin-top: 0; margin-bottom: 12px; font-family:  'Red Hat Text', Arial, Helvetica, sans-serif; font-style: normal; font-weight: bold; font-size: 16px; line-height: 24px; color: #006262">
                                Manifest {{ optional($manifest)->internal_id }}
                            </h2>
                            <p style="font-family: 'Red Hat Text', Arial, Helvetica, sans-serif; font-style: normal; font-weight: 400; font-size: 16px; line-height: 20px; color: #636664; margin-bottom: 10px; margin-top: 0;">
                                <strong style="color: #636664; font-weight: bold">
                                    Manifest Type:
                                </strong>
                                {{ ucwords(str_replace('_', ' ', optional($manifest)->transport_type)) }}
                            </p>
                            <table style="width: 100%; margin-bottom: 20px; border-collapse: collapse;">
                                <thead>
                                <tr>
                                    <th style="font-family: 'Red Hat Text', Arial, Helvetica, sans-serif; font-style: normal; font-weight: bold; font-size: 16px; line-height: 20px; color: #636664; text-align: left;">
                                        Estimated Departure:
                                    </th>
                                    <th style="font-family: 'Red Hat Text', Arial, Helvetica, sans-serif; font-style: normal; font-weight: bold; font-size: 16px; line-height: 20px; color: #636664; text-align: left;">
                                        Estimated Arrival:
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="font-size: 16px; font-family: 'Red Hat Text', Arial, Helvetica, sans-serif; font-weight: 400; line-height: 20px; font-style: normal; color: #636664;">
                                        {{ optional($manifest)->est_departure_date ? \Carbon\Carbon::parse(optional($manifest)->est_departure_date)->format('m/d/Y h:i:s A ') . \Carbon\Carbon::now($timezone)->format('T') : '' }}
                                    </td>
                                    <td style="font-size: 16px; font-family: 'Red Hat Text', Arial, Helvetica, sans-serif; font-weight: 400; line-height: 20px; font-style: normal; color: #636664;">
                                        {{ optional($manifest)->est_arrival_date ? \Carbon\Carbon::parse(optional($manifest)->est_arrival_date)->format('m/d/Y h:i:s A ') . \Carbon\Carbon::now($timezone)->format('T') : '' }}
                                    </td>
                                </tr>
                                </tbody>
                            </table>


                            @if($attachLink === true)
                                <p style="font-family: 'Red Hat Text', Arial, Helvetica, sans-serif; font-style: normal; font-weight: 400; font-size: 14px; line-height: 20px; color: #006262; margin-bottom: 5px; margin-top: 0;">
                                    WCIA Transfer Data Link
                                </p>
                                <a download="{{ optional($manifest)->wcia_url }}"
                                   style="color: #3ACEB4; font-family: 'Red Hat Text', Arial, Helvetica, sans-serif; font-style: normal; font-weight: 400; font-size: 12px; line-height: 16px; letter-spacing: 0.02em; text-decoration-line: underline; margin-bottom: 20px; display: block; word-break: break-all;"
                                   href="{{ optional($manifest)->wcia_url }}" target="_blank">
                                    {{ optional($manifest)->wcia_url }}
                                </a>
                            @endif

                            <table style="color: #0D3636;border-collapse: collapse; font-size: 14px" >
                                <thead>
                                <tr>
                                    <th style="word-wrap:break-word; border-bottom:1px solid #EEF1F8; border-radius: 4px; height: 45px; padding: 10px; background: #F8F9FB; text-align: left ">Category</th>
                                    <th style="word-wrap:break-word; border-bottom:1px solid #EEF1F8; border-radius: 4px; height: 45px; padding: 10px; background: #F8F9FB; text-align: left ">Product Name</th>
                                    <th style="word-wrap:break-word; border-bottom:1px solid #EEF1F8; border-radius: 4px; height: 45px; padding: 10px; background: #F8F9FB; text-align: left ">Lot #</th>
                                    <th style="word-wrap:break-word; border-bottom:1px solid #EEF1F8; border-radius: 4px; height: 45px; padding: 10px; background: #F8F9FB; text-align: left ">COA</th>
                                </tr>
                                </thead>

                                <tbody>
                                @for ($i = 0; $i < 50; $i++)
                                    <tr>
                                        <td style="word-wrap:break-word; border-bottom:1px solid #EEF1F8; border-radius: 4px; height: 45px; padding: 10px; text-align: left ">Category name name test</td>
                                        <td style="word-wrap:break-word; border-bottom:1px solid #EEF1F8; border-radius: 4px; height: 45px; padding: 10px; text-align: left ">Product name name test</td>
                                        <td style="word-wrap:break-word; border-bottom:1px solid #EEF1F8; border-radius: 4px; height: 45px; padding: 10px; text-align: left ">32823828 2929929929</td>
                                        <td style="word-wrap:break-word; border-bottom:1px solid #EEF1F8; border-radius: 4px; height: 45px; padding: 10px; text-align: left">
                                          <div style="color: #006262">
                                              <img  src="https://i.ibb.co/wSw2qwG/Document.png"  alt="" width="16" height="16">
                                              <a style="line-height: 1; padding-bottom: 10px; color: #006262; text-decoration: underline"  href="/">Download</a>
                                          </div>
                                        </td>
                                    </tr>
                                @endfor
                                <tr>
                                    <td></td>
                                </tr>
                                </tbody>

                            </table>
                            <br>
                            @if(!empty($comment))
                                <p style="margin-top: 0; margin-bottom: 20px;font-family: 'Red Hat Text', Arial, Helvetica, sans-serif;font-style: normal; font-weight: 400; font-size: 14px; line-height: 20px; color: #636664; word-break: break-word;">
                                    <strong>Comment: </strong>
                                    <span style="white-space: pre-wrap;">{{ $comment }}</span>
                                </p>
                            @endif
                            <p style="margin-top: 0; font-family: 'Red Hat Text', Arial, Helvetica, sans-serif; font-style: normal; font-weight: 400; font-size: 14px; line-height: 20px; color: #636664; margin-bottom: 20px;">
                                For further assistance, please contact your Sales Rep.
                            </p>
                            <p style="font-family: 'Red Hat Text', Arial, Helvetica, sans-serif; font-style: normal; font-weight: 400; font-size: 14px; line-height: 20px; color: #636664; margin: 0;">
                                Best Regards,
                                <br/>
                                {{ $accountHolder['name'] }}
                            </p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td style="padding: 0 40px 40px;">
                <table style="width: 100%; background-color: #0D3636; border-collapse: collapse;">
                    <tbody>
                    <tr>
                        <td style="padding: 0;">
                            <p style="color: white; text-align: center; padding: 25px 10px 10px; margin: 0; font-size: 14px; line-height: 20px; font-weight: 400; font-family: 'Red Hat Text', Arial, Helvetica, sans-serif;">
                                <img
                                    src="http://cdn.mcauto-images-production.sendgrid.net/c32ca175df6f09a1/544d2bb0-fcfd-450e-8a20-ead68bc6f3a0/241x115.png"
                                    width="80"
                                    alt="Bamboo Logo"
                                    style="
                                                width: 80px;
                                                max-width: 80%;
                                                height: auto;
                                                border: none;
                                                text-decoration: none;
                                                color: #ffffff;
                                                image-rendering: '-webkit-optimize-contrast';
                                            "
                                />
                            </p>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table style="width: 100%; background-color: #006262; border-collapse: collapse;">
                    <tbody>
                    <tr>
                        <td style="padding: 20px; text-align: center">
                            <p style="font-family: 'Red Hat Text', Arial, Helvetica, sans-serif; font-style: italic; font-weight: 400; font-size: 11px; line-height: 16px; color: white; margin-bottom: 8px;">
                                We respect your privacy. Please review our
                                <a href="https://getbamboo.com/privacy-policy" target="_blank" rel="noopener noreferrer"
                                   style="color: #ffffff">privacy policy</a>.
                            </p>
                            <p style="font-family: 'Red Hat Text', Arial, Helvetica, sans-serif; font-weight: 400; font-size: 11px; line-height: 16px; color: white; margin: 0;">
                                &copy; 2022 Bamboo Metrix LLC. All Rights Reserved.
                            </p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tfoot>
    </table>
</div>
</body>
</html>
