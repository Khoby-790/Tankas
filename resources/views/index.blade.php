@extends('layout.app')
@section('content')



<div class="container-fluid">

    <main role="main" class="main-content ml-sm-auto px-4">

<div class="mb-4">
<h3> Hi {{Auth::user()->name}} </h3>
<div class="text-muted text-tiny mt-1">
    <h4><small class="font-weight-normal">Today is Saturday, 17 November 2018</small></h4>
</div>
</div>

<div class="row">
<div class="col-sm-6 col-xl-3">
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <i class="fas fa-shopping-cart display-5 text-success"></i>
                <div class="ml-3">
                    <div class="text-muted small">Total Clients</div>
                    <div class="text-large">2362</div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="col-sm-6 col-xl-3">
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <i class="fas fa-globe display-5 text-info"></i>
                <div class="ml-3">
                    <div class="text-muted small">Processed Reports</div>
                    <div class="text-large">687,123</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-6 col-xl-3">

    <div class="card mb-4">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <i class="fas fa-gift display-5 text-danger"></i>
                <div class="ml-3">
                    <div class="text-muted small">Pending Requests</div>
                    <div class="text-large">985</div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="col-sm-6 col-xl-3">
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <i class="fas fa-tasks  display-5 text-warning"></i>
                <div class="ml-3">
                    <div class="text-muted small">Ongoing Tasks</div>
                    <div class="text-large">14 <span class="oi oi-media-record pulse mr-1 text-success"></span></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="row">
<div class="col-md-6 mb-4">
    <div class="card card-fluid">
        <header class="card-header card-header-white"> Completion Tasks </header>
        <div class="card-body">
            <div class="chartjs" style="height:210px">
                <canvas id="completion-tasks"></canvas>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 mb-4">
    <div class="card card-fluid">
        <header class="card-header card-header-white"> Pie Chart </header>
        <div class="card-body">
            <div id="canvas-holder" style="height:210px">
                <canvas id="chart-area"></canvas>
            </div>
        </div>
    </div>
</div>
</div>
<div class="row">
<div class="col-md-6">
    <div class="card card-fluid">
        <header class="card-header card-header-white"> My Subordinates </header>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action flex-column">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1">Davolio Nancy</h6>
                            <small>DOJ : 01-Jan-2018</small>
                        </div>
                        <p class="mb-1">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAABL1BMVEVgsMlaMBeeH2PxyaXktpJgutfvxqJaJglaLRNgtdBPJQ1aKQ1gs81aLhRaKg7416rqwpb&#x2B;1rHovpVbvNHzzaZUKhFXr8uZFV&#x2B;jE1tcuM/uwJv7y6Nei5ZNIwtetMyqOWvAwLGdK2rGdn7Fb4JkOiBaMxxop8Fforbhr5DUjo5fm6xcX1jZn4tcWE7Vl4hbSDivRG7Ak3LLgIG3UndflKKTZ0q5WnXut47iq5neoZbNgIntypiKYI5cZmNefoNaOyZdeX2CcJqAeqCPUYSUSX10j7CZO3SIZ5KAdZ18hKdsob2NWomaNHDqu6CmMGj/5rDCaIB4iqvVrYt4TTLIoH6kd1hbUEOifmOEWj54u8zRuqFcYl1vRSvUtpmPs7a1v7TCtaF&#x2B;sr65c4iRfGjazbfylR/9AAAHaklEQVR4nO2aWV/aWhTFQ0hIIGEeEhCNFSyDAlEGAQtYp7b2gohitbW2vfd&#x2B;/89wTxLIDGLYcF/cL/31QdeftdfZZyeCYW/1Vm/1Vm/1Vm/1Vs6L9crFsv&#x2B;LOEl6sVyxVqsVc5iXJNcMwZJYunPf23XRtN/Vq5Q6aWytDCR2UglQDO33u1x&#x2B;Px1gqEBvL82uC4Eluz0q4DIWTTGVLjJmxdKo2aj3HYu8XAxVqa3WBJKtdU&#x2B;6xQ7lt9NHRdEnXu/K5FkyXaEpivHTM&#x2B;TlRpSwlRGQJwwjffRZH39iwv2qxgJ5MtN5I8Heaiwg08wc6w0EJ6s4CyzWYxbTd9Gu4goIUAMW1EcWVDDwGCADbI/&#x2B;2ppAdhc3ADVhNwcdRO/9oglQLNgDtsBbfOH0m8rvL8Ja8JoIKhZ0YC14ZQdQCno5yIPgze0uOIQ0C9KQFqAp&#x2B;Ep94BiSnVdGwOUK9CCHkTEC8YUI6BrcOWBzPV0EsrcLEUBOQ2&#x2B;N1qZA/GmUXYSAKsEBGOawrx4&#x2B;8C1AADmODRn03YXDB3HfWnvgLWkA8SeP2x0ePW2&#x2B;aAKcBSxb0a7izW9hNyLwjLMvIlAlKADdIYhnPTG3VGFi/OSbnwU/U4Npgv4q3ByH3UrFwp67h2x8HgTUQSDTagdUAxQXEMP4IetCFKhsUgB0I&#x2B;nuYiUBbj2Dm7g7GI/r9bHNdAjA3EjaKTQaMCkiJdfG2OoB0Ekk96YAWgL0ANN6slgABKCOgXiWsBqgAqQOVgYwvQvRFLbqaw6k6psmAAYmA6wKcDAXgCBujTHwu2BWU9WB&#x2B;Gg&#x2B;QCr/ZCBgKjA7ibc0XUdGNhHQO5BCdwR8BHSn4CUAIkU8aJMx0AO6jdQ5EL97IQOIIHXwFPfFpWLA7mN1EvrMc9AKIJlwUL/NZrO3pTTUVqou5b6HBQAkFwhiRBCPcPuIdhvOG0TGOvoOt5Wz2HQh8c0dxUYbvgE&#x2B;nqrHQN7HFgMgAveAAOpWbDcL7Q2o&#x2B;6guXAhyu/5pDG2uYxv5FLqboeagTKA9mllnkY3&#x2B;qC6NZKB1RCptJ7LpgRWg7pKvBOoHGIC2F9vcyBb90eTxNVCB0kcW/Jh9DiwNmO5mfsCHM93jqSUEFgB1K4B8Qiena5k1BGb9O20fAHxNQ9YCigW&#x2B;f14CqKtLCQM3CTQLmL1/N&#x2B;YBpEaulTgg3UjyQWBKz/MBNANAM6CuJYFKwmTBrASAngJM/YMB3Us8znEgpVuMA8Bv7dFe4pdfOySMTbCdAcCTcEIgNcG/W/QmtjfsAYwPR6AZlAotJpT8sJHA9DEwBEAHAHkbTgpdy2g1QpuOgUCnb3hCB9wH1CLTAVo&#x2B;WwlM64Lmv1EfcCPSEZxQAflwJxK/zABjwzvcAPxfbRSCzvQ9vJrE6ec3vDWjAbcRQ7HevbR3CuAxABgOAL0ifeko5DAVQC4rAE31gF7Q2RKwMwAoZWnyByhXB1v1FxkUALcO4OjnXo9mKIZxVTpFcnXfITACuHUAv8lcLd3tpovYWuTVU6ABJCbf71jPF1kSCdMxRACJxFqkZXHsz/O2eRD9/vUHWwOEJPH867t7wzKKj46In9vPj6tlkNS3kfiM61iC&#x2B;C0xrEY9mXyU1Y0LkXkrVhiSW/Dy0Yuzv5sbweALDyaRUCRf/vv8UzQKK791c45nhoLQKPRNDAbxUL6cEQVxmOHPb7aScPLRi3Oe59rXnhb69dV2M6aDMIkLjcP9yPEOx/OXN1EghOjVGc/jOCe4Y7FgrN&#x2B;uCsJQM0IVr8riRCgUIQiBw3GeP7uC6MNW9BRH8qi4VhAJok&#x2B;vNyIWChHlHUl8ZyJOEKECJ/8Aj59Gl07jVvKDIo8AxNjkUwcVI8RMq988bAhCVROX2yFykx/hPyx9HjR9qQnt/gQhFry&#x2B;9rRxbsBxjf3QsSauM2BCsKT&#x2B;F00fVVUYIgRkvbvZbojisNAsoH8ahbz&#x2B;8xMDDQDnvyxHkDzXA3CZ/lDINPsFyfZ204NaEQzlC0NRakJEYkB5jDR0&#x2B;jh/uVQPtt6/0xuAc4VYhkPGK&#x2B;KTU4CU93ekRJTz&#x2B;fJOQ&#x2B;AMP4JfLWNB8oI3/jZ80Gg322K1FQvq5kAkdHyczyAwFNSBSZ//uMxZjH40AXB48xpptwWh4JYtiCHTif1D1AWxsVNGR8IEvGQPjBFQCApIOBgriEJbakNfnkCiMoJCxwWz/nI9MEdAJuAyyILYdbAlDjKZqihWd8r5iHwKQsSQs&#x2B;rzn533wBoBGUFoxfqFTAO5zg1ax9MhEAmVzflTAM6dOxD9ZAeA2iAMqplC0x3sZwbVsnL8IuUqbqeP4&#x2B;/eO07BliUCKkK1hRIQDF57MkK1HInkD8UZ8siCG6cW2EVAReBwMVNoNfv5soiLovT/WcV/choC&#x2B;wjoGKaqc9TxZUJgmQIOy3EIkmcwAPyFMwtY7C8QfceTIHkFo4/zX50BRL/AdMDxdRD9AATgNIVbl1AAzlI4bwy9FuDUCcALY&#x2B;hVAI5mYfQUDuDMiQPRr3AAlw70ATPo7BgAZtDZMQDMoPR48voURj9DAszezf8DftX/zUTdfX4AAAAASUVORK5CYII=" style="width:40px;" alt="Davolio Nancy" class="rounded float-left mr-1">
                            <span class="text-muted">Designation : </span> Manager - Government Technical Services <br />
                            <span class="text-muted">Department : </span> Environmental <br />
                        </p>
                    </a>
                </div>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action flex-column">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1">Fuller Andrew</h6>
                            <small>DOJ : 01-Jan-2018</small>
                        </div>
                        <p class="mb-1">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAIAAABMXPacAAAAA3NCSVQICAjb4U/gAAAACXBIWXMAAAw4AAAMOAHbabyPAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm&#x2B;48GgAACvRJREFUeNrtnPlbU1cax/sPzKhPnfZprVtbHatP10FnVKqCEsl6EwgkQBZCwhqSsBgRRdAgyBYCKIgoexAXlgDS1qV1YVxq63TstFVr61KSsFgp/gfzwqWBrAZI8CY59/n&#x2B;cE1y35d8P/ec855zbnzloISJ9BL1CrIAAUAAkBAABAAJAUAAkBAABAAJAUAAkBAABAAJAUAAkBAABAAJAUAAkBAABAAJAUAAkBAABIBQKpAwS2OwsmisUIwAuF9qMbMxitEbSrtFpd4NojwKpOi3kE16HEC&#x2B;t41yjUbtDKNXCTAEwJWq5TH66LTfAshTHXes/wZTW7kM4rcMogM4zsPubKc667sVoR9JlBo&#x2B;hgDMqMOJYV5mmFk/kBuq304xRtP1tpqCgUIZPBpm/Tq0mx42HQGYnkpisO&#x2B;3UyysHLoQ&#x2B;fSuYPiLSGuXBzJZw3f4w/cFg00cA9lGi4GBAQGYhvvfBVuaOFgT/vQXIWj4cpR&#x2B;G8W683n6gwDeNSqZNnun/i3klgg6AvBiFYuZt8dvYWM60yjDjAmYyeKBotDhvqiBvFBDBM3SYjp1YBfLmBViFNHtDQ9PAigwmCMAjlQoYX5DGb/3A8lDp7hwR4Pdk708k2rg0Z0vhCY7qJyQgewQOHkYSNGIMATArnTsCX8NVOrAwdDhb/iDRWx9AHkGppuNz1y6gT3RaM6xaAiA3XnWr1vNjRO8&#x2B;H43Kmx3&#x2B;tCGbL71KJCsFiEAtvRZCG26tzaMzFD5DJSybYCJYTz9SQAfsB6We0PoCIClykTMx9PvagZUIVCbGkUMS/elGBSsY1XTz0I9w7KgegiNQIwAmOs8k4ZPtQyYjXZgCKVZ&#x2B;zgp66oUGOwJGb4vHP6Wb0zCrN8lTklKFAA/BY2ZONTOHb7BGzzNHTxiNqc1pmAG/vTqH4OQbkwYbxkkG3iANwIwqfJoDErMwWPQoQvx2ZaBz5hl5eNYMNFDACZ1isPQB1PG6s47fBwAdCBush5KUmgTv20hE2ShlBAArtIn&#x2B;vfBuvChC1EwoYXR1eXWw1R5bC59m2cQjDWvGj4DATAbAMb6&#x2B;mQMpmCOfCQxhpLjfq/IedZcPNJVOXqpTt9bru9U65sP6quy9QVKfbxIT7I9WsAsGm9eQ1d4xkSsKZKOAEzIYv5layWHMqhIHNGWjF5vfv51y1TpP6uwVE&#x2B;Z/lCWXiK0XjHFAQxWhOlJ5FYOAvCnHG91DSaI/&#x2B;g8bOG7IwAm1efqxZMYDBwaNK9BLccQNlbptoUhABOLz0y7vbZQ8Oykxp71LwaAC1oDhTl1iQJfXOpiIwATc2AbEyUjm/OsvtCx9c4CALUV62MEFinawhEAfAlazOy36HMSJc&#x2B;vNjjjvrMAQGfL9QkxU7OcEIchABN6EDxZtwzv3/H8ZouT7k8DAAjqJanElOhCnhwBmNA9zvjCQxDtWU2&#x2B;89ZPGwAuWexYLgp2q3E/AsBszJI86DkE3T0U7yMvGm9dAwAkEuizFXDy46mClpxY3wVQlyn&#x2B;/Voj7uNId&#x2B;UM3J8hgA61vrMUP&#x2B;/vLW/JjvNFAJpkznBf/cxMny0Ac/WfLa/ewfM5AJ9X7Jy9&#x2B;y4BAPqqMsPnADw5V00cAA&#x2B;7SovjQ30IQKk03CXuuwoAqGYH34cAlMu4RANQmyH0IQAVigiiAajPFPkQgJIE9ojVwvLLBVCVxvOtQfiHdjVxANw7U&#x2B;RzVVC3Oo04AC6U7/A5AFAIGS/VEgHA4x5NZUqkLy5FNGXHjf658Pno/NG5BPC/UwWm8zMHknx3MQ7mw6M3teDjxbr9cwmgW5P&#x2B;0ufARFmOrt0d8&#x2B;iLqup9iXMJoFwpuN9W1LRXjPYDxjfFYkMkoUFzCSAhLKgwLgTtB0wqeOPHhhmNyTMpOtuLaZv&#x2B;gR5NNFOA35pLDQfmBkBvuTJg7RoEwEwbPlghZAXODQA&#x2B;bdP691cgAGaibfhwwYJ5/2krdTeAvuPZkAjSIQBmkrEC5837Cx8LdDeACPJGSATpEAAz5Ymx1xYuWDD/r7dOFTt2fKivvj5PLuPTyZvXrly&#x2B;&#x2B;N1li0gbPoKq5khmzK9dasfuX67ZAykgEaRDACy1dvU7cG/6&#x2B;62xNyv&#x2B;9kxJajRjyaLX4WM2tfjN16Rc0pVje&#x2B;3Nfjd89Hf4GCRCP9KzIR5pPe6j3/srrzbl4zNkUP&#x2B;Xx09rlNSAdfZ8t1aw/8eNqoS7bUWmRx/OHc74ZPXb&#x2B;LuQCAGwoQMxjDdff9Vk4vIlb0Ans&#x2B;rdpc77bq2Vy9&#x2B;CDurtJW&#x2B;YXoEUkAgBsC3yv96fjd3OCFKgX8rb1e6o4IWvznef&#x2B;xAcUiAAjiQib5zvHvchLARH/1vKi0Vd/6E7AEBYAn5ZIgIARW77J1TrrrIeQkFAYn5TggLAx4NPVi2bvfsQhGj9vmcAwJXMCpgxBrgQLif4FyQ6AFyK0K1YoLOd0t8WLmCT1sMlHvHVPAMA6PaJgicXaw7vjQu0P0RvWbumNC3q7pnCX7pKPeV7eRKA0ZvaP240ge72lLeV7cxP4UWHBPKo/vviQ7W5SbebVWO/AhsXAuAWAM&#x2B;/bhljcL0Jx4DLZPpUIQDuAoBr9IYWAXiZAPCmABhGrjfbBPBAhwC4GYCNHbHe8n5wf/wctQAXbZPFstTJYafzZTcac5/9u8n5LcmB81X3O0suV&#x2B;&#x2B;pUvIgCAIwPRUlhsbIo/z41MWYf1nF7hnsCQMA/KS4OB2CrBPQkpSiMgUXAXD4fFwiV5Ujj0qXrAoPWsTYiIshi5wNAFoS1xQKwvKVcZqiXeWpfARgSj8jwbJ2xXFSY1awt5rMmurabACsCt9mHRMSRaZLSvLT1ElhPg2gVMHvOK5p1NYdrquxUE5ZIW7WEuamgb7GmQH4uVsDl&#x2B;NxIKB1lqaW2ivttQ05Up8DUJUl7T7ZqHN4&#x2B;Akx3Du5SjEzANJsKR4BQjnOdVHXqjuU4xMANKnCnpP1OicO2YE9uH1vYf5tzSXTBdByVAUX4hEglDMZL3e3dqgzvBZAYWL4yaOlXV06J49OXScpiY87uJpLevBlnU0AxnOV1vq&#x2B;U7OaQ8KvhSAQysmk8Odd6Wg4nC70NgDyVBFHmchRJk1L7PR408j8HofUoS1wpgW0VO99jxNkGm8hyHTzcpWJqgOpXgIgP5YVKRNYlyIzE1UaYexrsAcAJsDkRI6rciXsTsx3/yTO7QAik13mPq6lrM0sBS9PvfO7z4/gAK61HtyXJ2cmRyxlbnZtrriMeM8GkCYXmEZCd2gx81OQ&#x2B;&#x2B;LDH1&#x2B;gknswgOS9qQyF2FUiJfFWcYIcWwYfgI&#x2B;5MGmKSunBALo623WuPppaWw5WaqS5u5mpseuimSA4gX/Ci/CWy9NB1ValjPZIAJp0sc4rjvONGo8EcKwgyzsAfKU74ZkAjqhrtY1eoDptQ4Hblu3cBUAlZi5xZ30yx0rLjPMwAIr4MK9xH0STRnoYAE4815sAvBMakBfrUQA&#x2B;FTG9CQBIlRnvSQC02oamEy3epO76Mo8BUCKL0nndcaFD6zEAqvalex&#x2B;As7p2jwFwolqj88ajRM7zDACYPJoi80Jl7orzAAB74theVv&#x2B;YxFEIPQBAUjLfWwFsELE8AABbyvNWAMtCNuVJWEQHkKLK4GXKvVV5Cj6hARTEheicfgbEE4&#x2B;q7FRCA/CaTRi7&#x2B;3GluYQGcES107sBdDRUERpAWcl&#x2B;TU2VF&#x2B;tQtYbQAPwEdG8tgSYehMH88yQYQQHkxbK8aRfMnrLiOQQFkJEc6fXug1KSeQQFECsT&#x2B;AIAsUzgQtP&#x2B;D2M7OHha5JHEAAAAAElFTkSuQmCC" style="width:40px;" alt="Fuller Andrew" class="rounded float-left mr-1">
                            <span class="text-muted">Designation : </span> Admin Manager <br />
                            <span class="text-muted">Department : </span> Business Development <br />
                        </p>
                    </a>
                </div>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action flex-column">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1">Leverling Janet</h6>
                            <small>DOJ : 17-Feb-2018</small>
                        </div>
                        <p class="mb-1">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAABiSSURBVHhe7V13WBRX189/3/N87/cmryWxxIItiIpiF7sCKlLtDQsaewdbYsSKIlZsiL137F3s3dh7edEgWFGsiQkmnu/87jJmJbtsYXZm1l2fZx6BnZ25c8/v/E69d764NzCQnIfjzsEXTuE7rvAheycAHJwBnQBwAsCxKdDRTaCTAZwM4GQAR2YBJwM4GcDJAE4GcHAtcALACQCHzYY6fQAHB78TAE4AOJ1Apw/g4FrgBIATAE4n0JG1wJGf3ekEOjj7OQHgBIAzCnCaAAfSgl/4We&#x2B;HBVFKWDA9CA&#x2B;mh&#x2B;FNPh76v&#x2B;PnZD4nic/9nAHiECYAQpSEi5&#x2B;v92tMP/duQAd71KNt39eiTV1qUHzn6rSej81datLubnXoUI/6dKFPI/rvgAABFgAFwPncwGD3AIBAJQHpazP&#x2B;Jv09kYV4opePEPS89hUpunUZGtuyFI1q4UYjW5Q0eOCzyFalaXrbcrS0YxXa370e3ejvJ4CE634uQLBLAIDGU1gQEAY0FNqc0L0u7ehaWxz4GX8736ehEHpMWw8a3VInbPw/joUP4Y43ceAcfaBEt3an1Z2qCWaQTIS9A8HuAICJBxWfYo1e0akqTWMNhUBH6WkytFcSMoQ&#x2B;hj83JWxzPsc1cb3IlqVpJd/7KpuSR2waAEh7BYLdAABCB8Wf7OVNc0MqsFB1Gg0NNaTN&#x2B;Js5Wm6O4DOfE9mqFEXwvSeyKdnD/kIyjw2HPYLALgAArb89wJ9Wh1YTFC7ZZ2uEJ&#x2B;d3AD4AYUnHysIUYZz2BgLNAwAUe4Ft&#x2B;bS2ZcVk20qrswMMjGtmOw&#x2B;6wibhAY/XnkCgaQCA8o/29BL2G5qfHSHZ&#x2B;rtgpUlt3OlyX19hquwFBJoFADT/MMfisPVyOXG2BsFoBsHUNmXpGjOBvYSKmgQANOh4T2/hycPO2lpwcl4f0cgMjkzusE9gD46h5gAAG4r4XReDa5v2jQEHPgGSR8hVaD1E1BQAoDF32NuPYQ0CncqpmUpfCyDY0bWW5v0BzQAAmoLiCzQHk6e0wOS&#x2B;n0hEccLoYt9GmvYHNAMAOH0JnG//HIQvgQn&#x2B;wMIOlQSwtWoKNAEAUD8KLVKRRm5tVPN6yFYe5GhGq6GhJgCADBpy65&#x2B;T9kugQ/5iFieJwAC/DNReulh1AED4Z7lyZyynr6b2ynVvmAL0HmiRBVQFgFTWXdyhssjvyzXhWrsOIprYkPIZLKCtyqGqAID2o6yLbJ/sOX6u1I1u&#x2B;h2N4WMC/6w2KGAK8KxaKxipDoBlHPaBIuUUEAQ&#x2B;MqgYLQ5rJI5RwcVlvb41Y4UzuIarmVozA6oBAKERCieYTNTXrZlUY98Z1aQ4xXSpRmknltGDhLni2mOaucp6D0vHCx9nMtcJbnG0o6VGU9UAAE1Au5bcnv/Y5igZl6LE7VPpj8sbxXF60VDBCONkZhpLQQA/B82mWmIBVQCQxCHRXT7Qqwf7b&#x2B;lEZnV&#x2B;RGBROjE/nN5f2UyvTq&#x2B;kV2dWUfrlTXQktj9FBBYhAETO&#x2B;1lyLckMaKlnQBUAwBE6neH8WTKBps6F8FcOC6TfL8bTaxa8AAAf&#x2B;BkgODp3oHAK4RyaupYtPkdZewbnBBI1lBNQBQCgwA3cgw&#x2B;NkGuiodlRbGNT9s2h3y6s/yh8fRCAFS6vGUMT25VjNigq273NfQZEOqgRnONqJ3wgLTSNKA4AKSeOFio56X9EQBHaO63739Sfof0SAKT/wQTJe&#x2B;fQogENaESAC/sF8pogU2AA6PdyI6lW/ADFAYC8/6WP3r/p3nxTEyp5&#x2B;NNCK9OzY4vp7dm1/9D&#x2B;zCB4d2EDvT23lhKm9xAAGKlgmAgArA311EzvoOIAAPIPcFpUzswftH//jJ6ULjl&#x2B;RrRfHwhvfl5Df1zaSFdXjab5fepTBEcJSjiISAjFhVQUoaAWKoSKAwAeMDRALvsPoU0K8aDHB&#x2B;fRr&#x2B;fWmdR&#x2B;fRC8PLWCUvfH0aM9cyhhaneKhm/AQIi0YRsafIAp3Dx6q7&#x2B;/JvIBigJAWpmL9XlydfzAmYsf3Vpoc2aqN/U7APBg10xxPDswn&#x2B;7ER9HKIf40qkkJThzZJlKQUt5oFNGCI6goAJK4HIoFFFhwKU&#x2B;zJy8J46zf1XVj6fdL8VYDIGVHDKXsnEGP98bS04Q4Oh47kKZ1qsxsUNQmbIBwUCt1AUUBAAfwSt/GFNWqjCwTO7a5qxBU6tFF7PytyTYAAAIdG8yjX7ZOpbXDmwqAyZ1Ghv9zgLuftFAYUhQA6JU/k1H7N8e7N3UONHQNCwmJH1N0b&#x2B;hzyQRIDAAASAf8gtT98&#x2B;j4nAHsG3gIs2BqPOZ&#x2B;Dv9nJ69i1kIoqCgAgPjjvNJHrlU&#x2B;AMDJBYM5379JdgB8ZIOD8&#x2B;nWuvE0qysnroKLyQICAAAbUzgkANAZI4cDCE8dx90d0w1m/sxhhKwYQJ8N4BfAJMztWVsWEAAAW3gnEocDAB4YWTA56v/C/odWsdr&#x2B;AyDmAgBgAAj&#x2B;uzGapnaslO0IAQDYyJVQhwQA1tPLkQOAc7aQ07lw/vQLP&#x2B;ZovnSOJQAACBAqnl00TAAgO7kCh2YAbN8iRxYQ9n/T2LYc/lke/1sLAIAAjuHaH5tkyxQ4tBN4kMMfOQAwgmv7CTGc/rXSAbTUBEg&#x2B;wZN9sXRzXaToM4y0spcBz6&#x2B;VgpDiUQDW&#x2B;8vhBIIBjsUNFB0/ltB&#x2B;5lQw4n5DYaC&#x2B;E5j556ecPl45JMDqIhKeH/PgkHkAsfLXzF26soqrEZKdXfqjVSng7JgAnRmIo5NxYVblBqS9i87zTmMOlwrGRk83uSlyMhdDUBQxN3Fi6LzRnJi5spZTwFYmgaw1AQDAoz2zKXFTNE1uX57GWdhihufGTiKYBy1sPKmoCZDKn7Pblc9WMwgYBG1d1zeMp3cXNyhuAnR1A24q6e9jMQsgCYZdzrBMzEHLwcFit6/shYIAQAm6tj5SFQaQooH4kS0tjgbw3GiH00IOQJXXx6MfAHv/ZDcSgAm4un6cqgDYN6WbxQDAc&#x2B;P5teAAqgIA2L0b/fzEJovZ8QMEAFTyAURmkB3BY7P7WWQC8LzYbhZL4bVg/1UBAG6KvXOwE0h2UsJY7nVu&#x2B;U9W9QFkNwqQUsOn5w&#x2B;2qMV8JGs/lsJpRftVAwAm4CSvC4BDZO2iUJEHmBemSh5AB4C5urSwBWsMAPgjPbw0Y/9VA4DUGgZv2FpfQK1MoJQUAgDOLBhiNgOgBR6LQu4ODCCsjNLCmgDVAIAbwxlENszafX/RC7htQgcVGSCOTs0LNxsAWAO5i5tAsBeSVoSvKgCkzSGW8OYQ1oSE8AGWDvLjKECdPACKQodm9BYtY6YSWugBxA6i2AJPSyuDVQWAcAb1lohb3CTKlPpTk1J0bfM0TgdbBwJLy8H6NQGUhvdO7iLayE0BANqPKqjWtF91AGAAokmEJ8dSFohqXZoG&#x2B;bpQZI8g&#x2B;uuqbVrCsioIPeNWseVDg0xuPgETF8u&#x2B;jm4hiHOTqH/YP5gC&#x2B;ANilzAL8&#x2B;rjeR&#x2B;AxuUL0JGl4&#x2B;gDg&#x2B;DlKd1qYHMPaxkg7UAcHZ73E4X5uVJUa&#x2B;M1Dd1bS0qJrW8R&#x2B;mrJ9ktjUbQWYGwCkBS5OyBQaIolTDC5bRlqVqUAtW1Qmd7&#x2B;vJpXBlnWGm4NAB7tmUVPuSege4AnhfsWpYltjO8/BEBju1gtUr&#x2B;mACD5A1guNYM3jTAXBJMYAL0bupJ7oVw0fVA7ouubLWoPswYAb44upJiwNlS3VF6awMu9cRjyAaQ3iWh5l1BN&#x2B;AD6rIAEEd7ph82izQEBtO/HYDeqXbogVSmRh3bH/kB0c4tNTEAyJ3/eHFlAe2cOosrf5afWNYoSAGhI&#x2B;Bg7lr/jdXVa3zJeEyYgMwhQK0fJ2NT&#x2B;QRPYEUQm0a9SEarmmp/qlS1MP6&#x2B;OIrphHgjMZYDkHTPo1eEFdHrJKGpQsRhVLpFPMI8hAMDpm2JHL43QHACkWgHWEGIDSVPvCYIQ2tYqTrVKF6Jq3&#x2B;Ul30ol6Py6aLNAYC4AXrPwzy4bTQHVSlLVEnkF0H4McvuH/RevjeFijz29NkaTAAAIdK9iC&#x2B;ZXudYQPYTGdhMBAPo2cqWaDID65VwECLw8itCB&#x2B;RFsDrZy2/hqemkkMjAFgIe7Z9JbtvkHYodRo0rFxbVruxemgCpFuCn0U/svaT42v9BKrd&#x2B;cqEOzAMDgETtjMk/wuwKRSTPEBlFtSlNEs1LkVa4w1WXhAATVS&#x2B;YXx&#x2B;xhHekFLwFHhGDp2kBp2XjcsPbMLgXF9XDtGgy0zvVLECIQyf5Lbw27zmXuhxoN94yBQdMAkAYNENzmCGEVdxKBCTIXkOAMNvcsKlgA9IyjdpmC5F7wP7RrzjD687LhxaNGGYA7hdMOxrHDN5jKu&#x2B;SimqUKUP2M69ZhkA0NLEnRfM9xGS&#x2B;QlN4bqNVYPysmsAsASCYB2oUyspQvkMyCFA7qAwAgqFI8D22bMZjeX1xPL04uF0vBXuHIMAmfAADt4TgyVgg/PzCXdk4fKGgfzKIDVSHyZ4cToZ/ubWZutPX7ms43h5pja&#x2B;Q6B6EiTAMWmSLUQsg1rhVv9MRmwNvDhaChEgtU5dBwx6yh9P4SA4C3jdU/XjIg8DuoPjljgwj8Lx3P98&#x2B;lXTFh5Oma7yMAQP/fe5egca3dRKiKvQ7BTtj4Qq7nU/o6dsMA&#x2B;hODnLrkaO3jOsIc3oo9klOywZ4uVMm1AHmyzcbhXiQ3bWMA/HUl/h8AgPDTji8VGq8veOnnNAbADmYAj2LfUDW3glSVjxpsVoY3daP4LtXFTif25OzZtQ9gbPDQPAgBgDjdx5tiWlSk9tVdqXNNN3G0Ybo&#x2B;FDec9w7cKOg/MwtkBYDUhFg6NHswtatSjEJruFGIpysNa&#x2B;hO5/o2EPfUSk9fdhnDLhkg80PrCkrB4oBgpCOJt6N5tj6KXks7hwIEGdRvigGSefFH8vJRdJ&#x2B;dT1wPZgfXt0dH77NwAs1BOoCQFCYdXH7t40up&#x2B;gDQc/7gA2TFABIAkji0011TGws5zJkHS875LBhAeuC7nEJOZMcssXt9PrwosYePQQBkjgIM&#x2B;QApvPIneeVouscgSuRGTnHNXg3oHt/DkgnW&#x2B;rn2DwB2xhL5PcOJ3erSL2ybH0weQE&#x2B;XTKSnK/ngdQMvjy0RW8ZbmghCSPiAt59JWvwDPca1&#x2B;JoPJvWje5ydxL0Se/rQPb631gVsanx2CQBh85mWn/PxbEgzejR9ML0&#x2B;up3Snz4g/X/vUs7TyxOLP4n9zV4ezsJP3jqJXtw69sk10x8n06tDW&#x2B;jR1HBxb4zhgdj&#x2B;XTudvqaErv&#x2B;5XQEgmSf5eXgQpQ4KposDgmhWqBetXjj1EwFl/uX3&#x2B;xfo5fFFBkFgNBPIwr&#x2B;/JZpe3zmd5bWXxE6gmZ296QJHIU95TBgbxmiJANQ&#x2B;V/MAgGY9YS17wRN8g&#x2B;l3YQ9/CmnfgMo0r0c5A2pSjsaeNGHZ3CwF9Q4gOLaQzcDfWUCjy8M5GXR/80STwo&#x2B;YH0Nf&#x2B;VYVYyjNY2nHY1rcK4BushlK47FizPbACpoFABZPPGONgmYl9AuksFBfqtjSi3IH1qZcPOkFgmpRkeDaVCiwBn1Zz52Gx07OEgS/3T2VAYK/ewYNMcD9TVH08vrhLK8VPj2S/l3XnQoH1hRjwFgwptxBtaliKy8K69yY9vfnsQ9uIp5BSwtBMjOO5gAArcGkPWLBr&#x2B;8dQK07NKRCTepQDp7g/IE6oWc&#x2B;CrMA/q9uGdMguH34ExBkBkASC//5hd1ZCj9s&#x2B;jhxL5cMAGYeC8aIsRZqWpdadWhE6/oE8LPogKBFRtAMAPASqUdMm7Dvm/sEUlBIA/qGNQqaBQEbErz&#x2B;33AOmGD0ghnGBfjXn/T22h6dT6C/TyCng2HzU09vIvrwwej3h82OFppvTPiZx5Obx45nCGrfkDb21bHZY35GPKvatl&#x2B;6vyYAAM14wRpybmAwdWCNz8OThslzMaDtWQEBlPxlvbIUtTTWqBA/pL&#x2B;j1&#x2B;c5NXxiqUgPP9w9i739yfT40FL6K/13o9&#x2B;LmDfNbOHrjxHPIAGhfadGdJZ9BDyrVthAdQDch2fPmjG/pz&#x2B;5sTMF&#x2B;izMADCl8cY&#x2B;L8Qg&#x2B;Kp&#x2B;WZq6aqFRYf759pmOARgEKezxp&#x2B;ycSemvnxk9P3LxbMEuks23Zmx4JjybW/P6NI&#x2B;dxTT2D/DsajOBqgDABIAWI7r6UU6eINjPohZqvSFhFAqowSAoR3EbVxkVanrqXXrB7V4p26bQr4/uGD1v2upFglWyI3xpjHg2PGMuftYR3fzFs6sNAtUAAApMZSoc2sWXvgqoRYXMsPOWaF7BgOqUy6cCrd233TgT3D9H75POG/18yfYNlMPLgwAoS&#x2B;5t6lw865f8zEO6NGafR11zoBoAIPwVTPu5WCMKZYPyjU02tO1bP0/K61uF9pw6YlDI&#x2B;8&#x2B;epJ0nDId8mw/vpa8bVqIC/tVlFb40XoAgF4e0y9gcIEJQyxSoAgBoP&#x2B;ivFSdPkEgxpTHWfl6Uw8d8nKwBfZ&#x2B;6cuETECSmJFHIyHDOI/BnVz/97NC5UwI8&#x2B;f2qsUmqY7PxwTn052gHIa9aTqEqAEC69DqXVyu2qE/fGontrRV65u8BBN80qkyuLbzoauJtAYK7D&#x2B;6LnEHgoG70DWt5yZbedO2u7rNzN65QMf4OmAPflWscBn0VmD3OFxzhtDZCYDVYQBUAPA0PpG2cIMnP2mVpqGeNQCDI3A0qUs2uLYVPsJhte&#x2B;iYwdR9wnDK37iq&#x2B;KxWt5a0/dgBqtQxSFC/rYUvPUcO9gUiu/lxqlsdM6AKANL4YSO7NuawyHSCxxqBG/oOBJrTuzzV7t5KgMCnT3uawPmCXA0qCGGD8vMxGL7191RM&#x2B;BhnHjYDDdv6UDKbATVSxooDALbuMT9sS7Z9X9uY/jMD4T8cGq7fv5MGzRhPwYO70&#x2B;z1y4WXL51nTsZRLkDq39OFzcAhrh0gS6i0GVAcACn8kFe4fOrRoh59K3Pol5Vw4M17hPAGjU8eUoUOAYL&#x2B;F2xZSwCF3EK19Ho5WRGmc5UzTYVoQHEAIPzbyPY/n0L2XxIGcgJ9Jo2k5CePhNYPmRlFmw7tFWbBUoHJfT6igZCODUVkpHQ0oDgAUCsf9X1jDv&#x2B;Us/8QGDR9zoYVIhL4nxquNGDqGDp99aKIAswp7sgtdP3rIRIqz6Xuq9zvkKJwelhRAADdiHmbhvgobv&#x2B;RGl6XsINu379H/1u7FHXiKOBJ2jMq0aye7Jk&#x2B;S8GCSCgvM&#x2B;LGvpwfUdgMKAoA2P/LbP/LcfwvNXRYOlnWng8GmMidQ3&#x2B;kpwuhV&#x2B;vclNLfp5N/WBfBAtZeV67vISIay&#x2B;EgIiQlHUFFAfCUASDF/4VlKPpYMvkQcmB4V5HsCYkYKCqGj5&#x2B;nEvL9/&#x2B;YGDzmKUJaMJ/O58APQ/PJEYT9AUQAA3ZMY5fB6szNZ1nwXBZ3iHG69fPualu6Ipy8qudCc&#x2B;BUCEEj&#x2B;5OFsoTXXles78AMqsR&#x2B;AvkclG0sVBQC6fUIZ5ejykWvizL2OSzAXX3wq0ulrF&#x2B;nSnRvCKSzduiG9&#x2B;e1XSjhznHJ4e6jqDIIRC3JCale/INFQqpQZUAwAqHsnMrprcdNkPhUYQEQCHP6t2buNXr99Q98196J/1SlN/aeMESzQa&#x2B;II/rycqqYAldGZCucDFAMAih1HONtVlGlY7tq/uSwAux8bv1IIvEJ7zkVw6jeXdwU6ydXA1BfPBSsVtFH515wxojLar7Ov6JD67BgAiyYWcf0frdPmTIYtzgEAYtYuEQBA8Sd/42qiaSRocDfxtzELZwrn0Bb3Nueaebg07dfOh1IUrAsoxgBIAA3q3Mim9X9Tk6xjAJ3jV7dHGy75VhV2HyA4c&#x2B;0Spb1&#x2B;RcWYodBNZOpatvgcoXFZDpEvKZgQUgQA0vr9AEb3NyrZfwgMKeBVe7YKAHh2aSZMgOQboDaAf/2mjP6kQGQLQRu7JhpHCzapS3t4IYxSjqAiAPi7AKR8AkiabGg66v5HLpwRCSD3No243ctTt7KH7b5rC292Dt/SuZtXVU0Pf80gWMhtYjCZSvgBigDgCTeA7OY0J8KcwhyOKalV0r3Q&#x2B;oXj2csX9IpzAfi7frOnrlS8S7AAegbQEaTGOOEIRnCvBEzmZwMAlDln9/ATDaBqTKrw7jkRVIa1fl3CTlEJRL9fET0w5uQ8QNfxvNk0//uBVwAhJFRjrMgIduIFJMiZfDYAQFgzIFRdB1ASJswAnL7MqV9EBKgP4N8u7hTO6aNOmTgvs5QPdwglKRQJ2NwEoM0Jmyv5q&#x2B;wAfvQFjNQgCgfximP2CW4l3aW3736jUq0a2qwlPCtmUToSsDkAtOAAmkvlCBPjD&#x2B;zi9aEfqCqzARpGzf2uXOehLa0wh6L7OGmmRCRgcwDAAdylsgNornAQFjYf1puCuF3cVgtCTI0FvQFYUbyyt26ZvK39AJsDAOFMTHd1HUBTky59ju5geP&#x2B;oDKpZHoazHI3eAAUA8P/DPTYoMdY&#x2B;gAAAAABJRU5ErkJggg==" style="width:40px;" alt="Leverling Janet" class="rounded float-left mr-1">
                            <span class="text-muted">Designation : </span> Sales Co-Ordinator <br />
                            <span class="text-muted">Department : </span> Quality <br />
                        </p>
                    </a>
                </div>
    </div>
</div>
<div class="col-md-6">
</div>
</div>

        <footer class="page-footer margin-free">
<div class="row">
    <div class="col-sm-6  d-flex flex-row justify-content-end">
        © 2018 Encode Themes. All rights reserved
    </div>
    <div class="col-sm-6 text-right">
        <a href="#" data-et-action="scroll-top" title="Scroll Top"><span class="go-top"><i class="fas fa-chevron-up"></i></span></a>
    </div>
</div>
</footer>
    </main>
</div>
<!--Remove the following line if you are not required cookie consent-->

<script>var cookieString = "";</script>



@endsection
