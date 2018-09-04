<!DOCTYPE html>
<html>
    <head>
        <title>Calculator</title>
    </head>

    <body background="https://images3.alphacoders.com/708/708746.jpg">
	 
	 <h3 align = 'center'
	 
		<br>
	    <font size = "7" color = "yellow"> <u>CALCULATOR </u> </font>
		</br>
		
		<br>
	    <font size = "6" color = "yellow"> Nattawat Meeleur  </font>
		</br>
		
		<br>
	    <font size = "6" color = "yellow"> 59160942  </font>
		</br>
		
		<br>
        <input type="text" id="firstNumber" placeholder="put firstNumber">
		</br>
		
		<br>
        <input type="text" id="secondNumber" placeholder="put secondNumber">
		</br>
        
		<br>
        <button id="sumButton" onclick="getSum()">+</button>
		<button id="sumButton" onclick="getSub()">-</button>
		<button id="sumButton" onclick="getMul()">*</button>
		<button id="sumButton" onclick="getDiv()">/</button>
		</br>
		
		<br>
        <div id="output" ></div>
		</br>
		
		</h3>

        <script>
            var firstNumber = document.getElementById("firstNumber");
            var secondNumber = document.getElementById("secondNumber");
            var output = document.getElementById("output");
			
			
            function getSum(){
                let sum = parseInt(firstNumber.value)+parseInt(secondNumber.value);
                showResult(sum);
            }
			
			function getSub(){
                let sum = parseInt(firstNumber.value)-parseInt(secondNumber.value);
                showResult(sum);
            }
			
			function getMul(){
                let sum = parseInt(firstNumber.value)*parseInt(secondNumber.value);
                showResult(sum);
            }
			
			function getDiv(){
                let sum = parseInt(firstNumber.value)/parseInt(secondNumber.value);
                showResult(sum);
            }
			
            function showResult(result){
                output.innerHTML = "answer: "+result;
            }
			
			
			
        </script>
    </body>
	
	
   
	

</html>
    