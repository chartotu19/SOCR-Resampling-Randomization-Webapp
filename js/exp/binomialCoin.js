/*

	Ball and Urn Experiment
 	Revised from Distributome Ball And Urn Experiment by Selvam into a separate module

 	Notes:
 		1. Avoid using this in private/public methods.There is only a single instance and its methods can be accessed using the name,ie, ballAndUrn
 		2. No need to immediately invoke it
 		
 	@dependencies:
 		1. Uses methods of core.js,appController.js,appModel.js,appView.js
 		2. Uses intrinsic names of Element Ids mentioned in index.html
*/
var binomialCoin=function(){


//::::::: PRIVATE PROPERTIES :::::::::::::::
var _stepID;
var _pParam, _nParam; // binomialDist is the distribution object
var _p = 0.5;	  		//Probability of heads (default value = 0.5)
var _N = 100;			//Maximum number of trials 
var _count;				//keeps count of number of coins tossed
var _n = 10; 			//Number of coin tossed for each step 
var _keys=[];
var _values=[];
var _width='30';
var _height='30';
var _coin = new Array(_N);

//::::::PRIVATE METHODS:::::::::::::

function _tossCoin(){
	//alert('count'+_count+'max:'+_n);
	if (_count < _n){
		_values[_count]=_coin[_count].toss();
		if(_values[_count]=='1')
			_keys[_count]='H';
		else
			_keys[_count]='T';
		_count++;
	}
	else{
		//view.loadInputSheet(_values);
		binomialCoin.reset();
	}
}

//:::::::::::: PUBLIC METHODS :::::::::::::
return{
	name:'Binomial Coin Toss',
	type:'coin',
    initialize: function(){
		//if u dont use var while defining a variable it is global!!
		//self binomialCoin;
		_nParam = new Parameter(document.getElementById("nInput"), document.getElementById("nLabel"));
		_nParam.setProperties(1, _N, 1, _n, "<var>n</var>");
		_pParam = new Parameter(document.getElementById("pInput"), document.getElementById("pLabel"));
		_pParam.setProperties(0, 1, 0.01, _p, "<var>p</var>");
		 binomialCoin.reset();
		
		// BINDING BUTTONS OF THE CONTROLLER
		$("#sdbutton").on('click',function(){
			Experiment.generate();
			$("#accordion").accordion( "activate" , 1);
			if(inputSliderState==1)
				{
				console.log("inputSliderState:"+inputSliderState);
				$('.input-handle').trigger('click');
				}
			});
		$('#nInput,#pInput').on('change',function(){
			Experiment.setVariable();
			});
		$('#grsbutton').on('click',function(){
			if(_values.length!=0)
				$('#dataDriven-tab').update({to:'dataDriven'});
			else
				$('#controller-content').append('<div class="alert alert-error"><a class="close" data-dismiss="alert" href="#">x</a><h4 class="alert-heading">Dataset NOT generated!</h4>Please click the adjacent "Generate Dataset!" button first.</div>');
			});
	},

	generate: function(){
			
		view.updateSimulationInfo();		//updates experiment info into third tile in the accordion
		//_n=$("#nInput").val();
	 	binomialCoin.setVariable();
        binomialCoin.createDataPlot(_n);			//create the canvas fro the dataset
		//assign a coin object to each
		for (var i = 0; i < _n; i++)
		_coin[i] = new Coin(document.getElementById("device" + i));
		for (var i = 0; i < _n; i++){
                    _coin[i].prob = _p;
                    
            }
		_count = 0; 
		//resetting the sample space Coin array
		for (var i = 0; i < _n; i++){
            if (i < _n)
				_coin[i].setValue(-1);
            else
				_coin[i].setValue(-2);
		}
		//run the Coin toss
		_stepID = setInterval(_tossCoin, 50);
	},
	reset: function(){
		clearInterval(_stepID);
	 	binomialCoin.setVariable();
 	},
	createControllerView:function(){
	console.log("createControllerView for binomialCoin executed!");
		var html='<p class="toolbar"><p class="tool"><span id="nLabel" class="badge badge-warning" for="nInput">N = </span><span id="nvalue"></span><input id="nInput" type="range" tabindex="7" class="parameter"/><i class="icon-question-sign popups" rel="popover" data-content=" n = number of coins to be tossed!" data-original-title="n"></i></p><p class="tool"><span id="pLabel" class="badge badge-warning" for="pInput">P = </span><span id="pvalue"></span><input id="pInput" type="range" tabindex="8" class="parameter"/><i class="icon-question-sign popups" rel="popover" data-content=" p = probability of getting a Head!" data-original-title="p"></i></p><select id="rvSelect" tabindex="9" title="Random variable" ><option value="0" selected="true">Y: Number of heads</option><option value="1">M: Proportion of heads</option></select></p><button class="btn popups" id="sdbutton"  rel="popover" data-content="To generate random samples, first you need a dataset to start with. Once you generate it, go ahead and generate random samples!" data-original-title="Dataset">Generate DataSet!</button>&nbsp;<button class="btn btn-danger" id="grsbutton" >Generate Random Samples!</button>';
		$('#controller-content').delay(1000).html(html);
		$('.popups').popover();
		$('.tooltips').tooltip('destroy');	// destroy first and bind tooltips again. UI bug: the "back to generateDataset" (back button) tooltip doesnt vanish after mouse click.
		$('.tooltips').tooltip()
	},
	
	createDataPlot:function(size){
		var temp=[];
		for(var i=0;i<size;i++)
			{
				temp.push('<div class="device-container" id="device');
				temp.push(i);
				temp.push('-container">');
				temp.push('<canvas id="device');
				temp.push(i);
				temp.push('" class="device panel front');
				temp.push(i);
				temp.push('" width="30" height="30" title="sample');
				temp.push(i);
				temp.push('">Coin');
				temp.push(i);
				temp.push('</canvas>');
				temp.push('</div>');
			}
		$('#dataset').html(temp.join(''));
		
	},
	
	setVariable:function(){
		_p = _pParam.getValue();
		_n = _nParam.getValue();
	},
	
	getDataset:function(){
		return _keys;
	},
	getDatasetKeys:function(){
		return _keys;
	},
	getDatasetValues:function(){
		return _values;
	},
	
	getDatasetSize:function(){
		return _n;
	},
	
	getSampleHW:function(){
	return {"height":_height,"width":_width};
	}
  }//return
}();


