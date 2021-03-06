@extends('layout')

@section('controller')
    ng-controller="SettingsCtrl"
@stop

@section('content')
<!-- PERSONAL -->
<div class="row">
    <div class="col-md-6 col-md-offset-3">

        <div class="panel panel-default">
            <div class="panel-heading"><i class="fa fa-user"></i> Personal</div>
            <div class="panel-body">
                <div class="row" style="margin-bottom: 15px;">
                    <div class="col-md-12">
                        <i class="fa fa-envelope" style="position:absolute; top:9px; color:#cecece;"></i>
                        <input ng-model="user.email" class="form-control" type="text" placeholder="Email" style="border-left:0;border-right:0;border-top:0;border-bottom:1px dotted; padding-left: 20px;">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 15px;">
                    <div class="col-md-12">
                        <i class="fa fa-lock" style="position:absolute; top:9px; color:#cecece;"></i>
                        <input ng-model="user.new_password" class="form-control" type="password" placeholder="New password" style="border-left:0;border-right:0;border-top:0;border-bottom:1px dotted; padding-left: 20px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <i class="fa fa-lock" style="position:absolute; top:9px; color:#cecece;"></i>
                        <input ng-model="user.new_password_conf" class="form-control" type="password" placeholder="Confirm" style="border-left:0;border-right:0;border-top:0;border-bottom:1px dotted; padding-left: 20px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / PERSONNAL -->

<!-- PUBLIC -->
<div class="row">
    <div class="col-md-6 col-md-offset-3">

        <div class="panel panel-default">
            <div class="panel-heading"><i class="fa fa-globe"></i> Public</div>
            <div class="panel-body">
                <div class="row" style="margin-bottom: 15px;">
                    <div class="col-md-12">
                        <i class="fa fa-quote-left" style="position:absolute; top:9px; color:#cecece;"></i>
                        <textarea ng-model="user.about" rows="3" style="border-left:0;border-right:0;border-top:0;border-bottom:1px dotted; width:100%; padding-left: 20px;" placeholder="About you..."></textarea>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 15px;">
                    <div class="col-md-12">
                        <i class="fa fa-github" style="position:absolute; top:9px; color:#cecece;"></i>
                        <input ng-model="user.github_username" class="form-control" type="text" placeholder="GitHub username" style="border-left:0;border-right:0;border-top:0;border-bottom:1px dotted; padding-left: 20px;">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 15px;">
                    <div class="col-md-12">
                        <i class="fa fa-twitter" style="position:absolute; top:9px; color:#cecece;"></i>
                        <input ng-model="user.twitter_username" class="form-control" type="text" placeholder="Twitter username" style="border-left:0;border-right:0;border-top:0;border-bottom:1px dotted; padding-left: 20px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / PUBLIC -->

<!-- PREFERENCES -->
<div class="row">
    <div class="col-md-6 col-md-offset-3">

        <div class="panel panel-default">
            <div class="panel-heading"><i class="fa fa-heart"></i> Preferences</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            By default, I want my posts to be
                            <span ng-show="user.preferences['posts.private']">
                                &nbsp;<a ng-click="user.preferences['posts.private'] = !user.preferences['posts.private']" style="border-bottom:1px dotted; font-size: 18px; cursor:pointer;">private</a>
                            </span>
                            <span ng-show="!user.preferences['posts.private']">
                                &nbsp;<a ng-click="user.preferences['posts.private'] = !user.preferences['posts.private']" style="border-bottom:1px dotted; font-size: 18px; cursor:pointer;">public</a>
                            </span>
                            <span ng-show="!user.preferences['posts.private']">
                                &nbsp; and comments to be
                                <span ng-show="user.preferences['posts.allow_comments']">
                                    &nbsp;<a ng-click="user.preferences['posts.allow_comments'] = !user.preferences['posts.allow_comments']" style="border-bottom:1px dotted; font-size: 18px; cursor:pointer;">enabled</a>
                                </span>
                                <span ng-show="!user.preferences['posts.allow_comments']">
                                    &nbsp;<a ng-click="user.preferences['posts.allow_comments'] = !user.preferences['posts.allow_comments']" style="border-bottom:1px dotted; font-size: 18px; cursor:pointer;">disabled</a>
                                </span>
                            </span>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / PREFERENCES -->

<div class="row">
    <div class="col-md-4 col-md-offset-4 text-center">
        <button ng-click="saveUser()" class="btn btn-success" ng-disabled="loading">
            <i class="fa fa-check" ng-show="!loading"></i>
            <i class="fa fa-cog fa-spin" ng-show="loading"></i>
                Save my settings !
        </button>
    </div>
</div>
@stop

@section('scripts')
    <script src="/vendor/humane-js/humane.min.js" type="text/javascript" charset="utf-8"></script>
@stop
