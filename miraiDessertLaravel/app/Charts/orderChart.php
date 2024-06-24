<?php

namespace App\Charts;
use App\Models\Order;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;
class orderChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
   
    {
        $tahun = date('Y');
        $bulan = 12;
        for($i=1; $i <= $bulan; $i++){
            $totalPenjualan = Order::query()->whereYear('orderDate', $tahun)->whereMonth('orderDate',$i)->sum('orderTotal');
            $dataBulan[]= Carbon::create()->month($i)->Format('F');
            $dataTotalPenjualan[]=$totalPenjualan;
        }
        // dd($dataTotalPenjualan);
        return $this->chart->lineChart()
            ->setTitle('Data Penjualan Mirai Dessert')
            ->setSubtitle('Total penjualan per hari pada transaksi Mirai Dessert ')
            // ->addData('Physical sales', [40, 93, 35, 42, 18, 82])
            ->addData('Total Penjualan', $dataTotalPenjualan)
            ->setHeight(300)
            ->setGrid('#50c933', 0.1)
            ->setColors(['#FFC107'])
            ->setXAxis($dataBulan);
    }
}
