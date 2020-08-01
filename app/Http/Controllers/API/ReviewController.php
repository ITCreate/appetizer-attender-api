<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\MatchFusion;
use App\Models\MatchFusionComments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = request()->getContent();
        $json = json_decode($content, true) ?? [];
        $matchFusionQuery = MatchFusion::query();
        $matchFusion = $matchFusionQuery->where('id', $json['match_fusion_id'])->first();

        if(empty($matchFusion)) {
            return response([], 200);
        }

        $alcoholicBeverages = DB::table('alcoholic_beverages')->find($matchFusion->alcoholic_beverage_id);

        $oneNiddle = DB::table('Nibbles')->find($matchFusion->one_nibble_id);
        $twoNiddle = DB::table('Nibbles')->find($matchFusion->two_nibble_id);

        $reviewCommentsObj = DB::table('match_fusion_comments')->where('match_fusion_id', $matchFusion->id)->get();

        $reviewComments = [];
        foreach ($reviewCommentsObj as $reviewComment) {
            $reviewComments[] = $reviewComment->review;
        }

        $resultArray = [
            'match_fusion' => [
                "alcoholic_deverage" => [
                    "image" => $alcoholicBeverages->image
                ],
                "one_niddle" => [
                    "image" => $oneNiddle->image
                ],
                "two_niddle" => [
                    "image" => $twoNiddle->image
                ]
            ],
            "review_comments" => $reviewComments
        ];

        return response(json_encode($resultArray), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matchFusionId = $request->get('match_fusion_id');
        $newMatchFusionComments = new MatchFusionComments();

        $newMatchFusionComments->match_fusion_id = $matchFusionId;
        $newMatchFusionComments->review = $request->get('review_comment');
        $newMatchFusionComments->star = $request->get('review_star');

        $newMatchFusionComments->save();

        $reviewCommentsObj = MatchFusionComments::query()->where("match_fusion_id", $matchFusionId)->get();

        $reviewComments = [];
        foreach ($reviewCommentsObj as $reviewComment) {
            $reviewComments[] = $reviewComment->review;
        }

        $resultArray = [
            "review_comments" => $reviewComments
        ];

        return response(json_encode($resultArray), 200);
    }
}
