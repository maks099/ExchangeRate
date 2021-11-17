<?php // content="text/plain; charset=utf-8"

include 'jpgraph/src/jpgraph.php';
include 'jpgraph/src/jpgraph_line.php';


function getChart($chart){
    $datay1 = array();
    $datay2 = array();
    $dates = array();

    $count =  count($chart)-7;

    for($i = 0; $i < 7; $i++){
        array_push($datay1, $chart[$count]['buying']);
        array_push($datay2, $chart[$count]['selling']);
        $date = $chart[$count]['date'];
       
        array_push($dates, substr($date, strpos($date, "-") + 1));
        $count++;
    }

    // Setup the graph
    $graph = new Graph(500,250);
    $graph->SetScale("textlin");

    $theme_class=new UniversalTheme;

    $graph->SetTheme($theme_class);
    $graph->img->SetAntiAliasing(false);
    $graph->title->Set('Statistic');
    $graph->SetBox(false);

    $graph->SetMargin(40,20,36,63);

    $graph->img->SetAntiAliasing();

    $graph->yaxis->HideZeroLabel();
    $graph->yaxis->HideLine(false);
    $graph->yaxis->HideTicks(false,false);

    $graph->xgrid->Show();
    $graph->xgrid->SetLineStyle("solid");
    $graph->xaxis->SetTickLabels($dates);
    $graph->xgrid->SetColor('#E3E3E3');

    // Create the first line
    $p1 = new LinePlot($datay1);
    $graph->Add($p1);
    $p1->SetColor("#6495ED");
    $p1->SetLegend('Buying');

    // Create the second line
    $p2 = new LinePlot($datay2);
    $graph->Add($p2);
    $p2->SetColor("#B22222");
    $p2->SetLegend('Selling');



    $graph->legend->SetFrameWeight(1);
    $img = $graph->Stroke(_IMG_HANDLER);
    $fileName = "imagefile.png";
    $graph->img->Stream($fileName);
    ob_start();
    imagepng($img);
    $imageData = ob_get_contents();
    ob_end_clean();?>
   
  


<div>
    <img style="width: 500px; height:300px;" src="data:image/png;base64,<?php echo(base64_encode($imageData)); ?>" />
</div>
<?php 
    return $graph;
}
?>
   