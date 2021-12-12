<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Invoice</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Red+Hat+Text:wght@400;500;700&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="./normalize.css"/>
    <link rel="stylesheet" href="./style.css"/>
    <style>
        body {
            font-family: 'Red Hat Text', Arial, Helvetica, sans-serif;
            font-size: 14px;
            line-height: 22px;
            color: #0d3636;
            -webkit-print-color-adjust: exact !important;
        }

        .main-print {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wrapper {
            width: 1000px;
            max-width: 1000px;
        }

        .title {
            font-weight: bold;
            font-size: 2rem;
            line-height: 2.25rem;
            color: #000;
            margin: 0;
        }

        .body1 {
            font-size: 1.3rem;
            line-height: 1.5rem;
            letter-spacing: 0.04em;
            color: #000;
            font-weight: 500;
        }

        .body2 {
            letter-spacing: 0.04rem;
            font-size: 1rem;
            line-height: 1.2rem;
        }

        .subtitle1 {
            letter-spacing: 0.04rem;
            font-size: 0.8rem;
            line-height: 1rem;
            text-transform: uppercase;
            font-weight: 500;
        }

        .hr {
            border-top: 1px solid #e4efeb;
            height: 1px;
            margin: 16px 0;
            display: block;
        }

        .hr::before {
            content: '';
        }

        .grid {
            display: flex;
        }

        .grid-left {
            width: 60%;
        }

        .grid-right {
            width: 35%;
            padding-left: 5%;
        }

        .org {
            display: flex;
            align-items: top;
        }

        .org__avatar {
            margin-right: 10px;
            transform: translateY(5px);
        }

        .org__info__name {
            margin-bottom: 6px;
        }

        .order-info {
            display: flex;
            flex-flow: wrap;
            align-items: flex-start;
        }

        .order-info dt {
            width: 100px;
        }

        .order-info dd {
            width: calc(100% - 100px);
            font-weight: 500;
            color: #000;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table thead th {
            background: #f8f9fb;
            font-weight: 500;
        }

        table th,
        table td {
            border-bottom: 1px solid #eef1f8;
            padding: 4px 8px;
            line-height: 1.5rem;
        }
    </style>
</head>
<body class="main-print">
<noscript>You need to enable JavaScript to run this app.</noscript>
<main class="wrapper">
    <h1 class="title">Purchase Order</h1>
    <div class="hr"></div>
    <section class="summary grid">
        <div class="grid-left org">
            <img
                src="https://www.gravatar.com/avatar/edc2793898c57adc1353e6d8750a43b0?s=128&d=identicon&r=PG"
                width="32"
                height="32"
                class="org__avatar"
            />
            <div class="org__info">
                <div class="org__info__name body1">Grow OP Farms</div>
                <div class="org__info__address body2">
                    2611 N Woodruff Rd STE B Spokane Valley, WA 992064138
                </div>
            </div>
        </div>
        <div class="grid-right">
            <dl class="order-info">
                <dt>Order #:</dt>
                <dd class="body1">8561837</dd>
                <dt>Order Date:</dt>
                <dd>12/20/2022</dd>
                <dt>Created By:</dt>
                <dd>Sales Support Team Sales Support Team</dd>
            </dl>
        </div>
    </section>
    <div class="hr"></div>
    <section class="grid">
        <div class="grid-left">
            <div>
                <div class="subtitle1">SHIP TO</div>
                <div class="body1">SoftDreams_Processor</div>
                <div>9724 Aurora Ava N Seattle, WA 981033223</div>
                <div>Phone: 2067907036</div>
            </div>
            <div>
                <div class="subtitle1">EST. DELIVERY DATE</div>
                <div>12/20/2022</div>
            </div>
        </div>
        <div class="grid-right">
            <dl class="order-info">
                <dt>License #:</dt>
                <dd>M1837</dd>
                <dt>UBI</dt>
                <dd>3890235423</dd>
            </dl>
        </div>
    </section>
    <div class="hr"></div>
    <table>
        <thead>
        <th>#</th>
        <th>Product</th>
        <th>Unit Price</th>
        <th>Units</th>
        <th>Line Total</th>
        </thead>
        <tbody>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>
        <tr>
            <td>01</td>
            <td>12th Man Down</td>
            <td>$0.65</td>
            <td>2163</td>
            <td>$1405.95</td>
        </tr>


        </tbody>
        <tfoot>
        <tr>
            <td colspan="4">Order Totals</td>
            <td>$1,014,288.95</td>
        </tr>
        <tr>
            <td colspan="4">Amount Due</td>
            <td>$1,014,288.95</td>
        </tr>
        </tfoot>
    </table>
    <div>lolllllll</div>
    <div>lolllllll</div>
    <div>lolllllll</div>
    <div>lolllllll</div>
</main>
</body>
</html>
