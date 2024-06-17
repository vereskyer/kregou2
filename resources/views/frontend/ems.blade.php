@extends('layouts.header')

@section('title', '韓國發往澳大利亞/新西兰與加拿大的EMS價格表')

@section('content')

<main class="mt-6">
    @include('layouts.hero')


    <!-- source: https://flowrift.com/c/logo-cloud/atJUX?view=code -->


    <div class="mt-10 bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10">
        <table class="w-full table-fixed">
            <caption class="text-lg text-gray-600 dark:text-gray-400 mt-4 mb-4 font-bold">
                韓國發往澳大利亞/新西兰與加拿大的EMS價格表。如果需要發往其他地區，請聯繫我們。<br>
                （韓國發香港/臺灣，有專線物流，運費請聯繫我們！）
              </caption>
              <caption class="text-lg text-gray-600 dark:text-gray-400 mt-4 mb-4 font-bold">
                表格中價格是以重量計算。如果箱子體積比較大，會按照體積計算。<br>
                體積重量(Kg) : 長(cm)X寬(cm)X高(cm)/6,000 (韓幣)
              </caption>
            <thead>
                <tr class="bg-gray-100">
                    <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">重量（kg）</th>
                    <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">澳大利亞</th>
                    <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">新西兰</th>
                    <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">加拿大</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">0.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            23,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            23,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            29,000</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">0.75</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            26,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            26,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            31,000</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">1</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            28,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            28,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            33,000</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">1.25</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            32,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            30,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            35,000</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">1.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            35,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            32,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            37,000</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">1.75</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            38,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            35,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            39,500</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">2</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            41,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            37,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            41,500</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">2.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            46,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            41,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            45,500</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">3</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            51,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            45,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            49,000</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">3.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            56,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            50,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            53,000</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">4</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            60,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            54,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            57,000</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">4.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            65,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            58,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            60,500</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            70,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            62,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            64,500</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">5.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            75,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            67,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            68,500</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">6</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            80,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            71,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            72,000</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">6.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            84,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            75,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            76,500</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">7</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            89,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            80,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            80,500</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">7.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            94,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            84,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            84,500</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">8</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            99,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            88,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            89,000</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">8.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            104,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            93,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            93,000</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">9</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            108,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            97,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            97,500</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">9.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            113,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            101,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            101,500</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">10</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            118,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            106,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            105,500</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">10.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            123,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            110,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            110,000</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">11</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            127,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            115,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            114,000</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">11.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            132,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            119,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            118,500</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">12</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            137,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            123,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            122,500</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">12.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            142,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            128,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            126,500</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">13</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            147,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            132,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            131,000</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">13.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            151,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            136,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            135,000</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">14</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            156,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            141,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            139,500</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">14.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            161,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            145,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            143,500</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">15</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            166,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            149,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            148,000</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">15.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            171,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            154,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            152,000</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">16</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            175,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            158,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            156,000</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">16.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            180,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            163,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            160,500</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">17</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            185,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            167,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            164,500</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">17.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            190,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            171,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            169,000</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">18</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            195,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            176,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            173,000</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">18.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            199,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            180,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            177,000</span>
                    </td>
                </tr>

                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">19</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            204,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            184,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            181,500</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">19.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            209,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            189,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            185,500</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">20</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            214,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            193,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            190,000</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">20.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            219,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            197,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            194,000</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">21</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            223,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            202,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            198,000</span>
                    </td>
                </tr>
                
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">21.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            228,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            206,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            202,500</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">22</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            233,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            211,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            206,500</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">22.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            238,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            215,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            211,000</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">23</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            243,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            219,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            215,000</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">23.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            247,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            224,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            219,000</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">24</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            252,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            228,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            223,500</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">24.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            257,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            232,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            227,500</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">25</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            262,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            237,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            232,000</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">25.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            266,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            241,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            236,000</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">26</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            271,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            246,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            240,000</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">26.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            276,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            250,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            244,500</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">27</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            281,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            254,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            248,500</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">27.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            286,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            259,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            253,000</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">28</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            290,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            263,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            257,000</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">28.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            295,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            267,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            261,500</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">29</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            300,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            272,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            265,500</span>
                    </td>
                </tr>
                <tr class="even:bg-blue-100">
                    <td class="py-4 px-6 border-b border-gray-200">29.5</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            305,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            276,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            269,500</span>
                    </td>
                </tr>
                <tr class="odd:bg-gray-50">
                    <td class="py-4 px-6 border-b border-gray-200">30</td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">
                            310,000</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-blue-500 text-white py-1 px-2 rounded-full text-xs">
                            280,500</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-200">
                        <span class="bg-violet-500 text-white py-1 px-2 rounded-full text-xs">
                            274,000</span>
                    </td>
                </tr>
                
                <!-- Add more rows here -->
            </tbody>
        </table>
    </div>
       


    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("imageSlider", () => ({
                currentIndex: 1,
                images: [
                    "https://unsplash.it/640/425?image=30",
                    "https://unsplash.it/640/425?image=40",
                    "https://unsplash.it/640/425?image=50",
                ],
                previous() {
                    if (this.currentIndex > 1) {
                        this.currentIndex = this.currentIndex - 1;
                    }
                },
                forward() {
                    if (this.currentIndex < this.images.length) {
                        this.currentIndex = this.currentIndex + 1;
                    }
                },
            }));
        });
    </script>

@endsection
