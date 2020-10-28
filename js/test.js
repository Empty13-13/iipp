document.addEventListener("DOMContentLoaded", () => {
	var testJson = JSON.parse(data);
	let questionSection = document.getElementsByClassName('question')[0];

	//отрисовываем вопросы
	for (var i=0; i < testJson.length; i++) {

		let questionNumber = i+1;

		if(questionNumber > 1) {
			let newSection = questionSection.cloneNode(true);
			questionSection.before(newSection)
		}
		

		let valueForQuestion = 'question_' + questionNumber;
		questionSection.id = valueForQuestion;

		let inputList = questionSection.querySelectorAll('li input');
		for(var k=0; k < inputList.length; k++) {
			inputList[k].setAttribute('name', valueForQuestion);

			let idForRadioElement = inputList[k].getAttribute('value') + '_' + questionNumber + '_' + k;
			inputList[k].id = idForRadioElement;
			inputList[k].nextSibling.nextSibling.setAttribute('for', idForRadioElement);
		}


		let h3Tag = questionSection.getElementsByTagName('h3')[0];
		h3Tag.textContent = testJson[i].question ;

		let spanTag = document.createElement('span');
		spanTag.textContent = questionNumber + '.';
		h3Tag.prepend(spanTag);
	}


	let resultByIdQuestion = new Map();
	var sendResult = document.getElementById('send_result');
	sendResult.onclick  = function() {
		
		let question = document.getElementsByClassName('question');
		let infoError = document.getElementsByClassName('info-error')[0];
		let errorBlock = [];

		//проверяем что на впорос был дан ответ
		for(var i=0; i < question.length; i++) {
			let inputList = question[i].querySelectorAll('li input');
			let isChecked = false;
			
			for(var k=0; k < inputList.length; k++) {
				let isCheckedInput = inputList[k].checked;
				if(isCheckedInput) {
					isChecked = isCheckedInput;
					resultByIdQuestion.set(question[i].id, inputList[k].value);
					break;
				}
			}

			if (!isChecked) {			
				question[i].classList.add('section-error');
				errorBlock.push(question[i].id.replace('question_', ''))
			} else {
				question[i].classList.remove('section-error')
				let elementDelete = question[i].id.replace('question_', '');
				const index = errorBlock.indexOf(elementDelete);

				if(index >= 0) {
					errorBlock.splice(index, 1);
				}
			}
		}

		let insertBlockErrors = infoError.querySelectorAll('ul')[0];
		while(insertBlockErrors.childNodes.length > 2) {
			insertBlockErrors.removeChild(insertBlockErrors.childNodes[0]);   
		}

		if (errorBlock.length > 0) {	
			infoError.style.display = 'block';

			for(let k=0; k<errorBlock.length; k++) {
				let questionNumber = errorBlock[k];
				let elementError = insertBlockErrors.querySelectorAll('li');
				elementError = elementError[elementError.length-1]
				
				let cloneElementError = elementError.cloneNode(true);
				elementError.after(cloneElementError);

				let linkForTestBlock = elementError.querySelectorAll('a')[0];
				linkForTestBlock.textContent = questionNumber;
				linkForTestBlock.setAttribute('href', '#question_' + questionNumber)

				if (k > 14) {
					linkForTestBlock.textContent = '...';	
					break;
				}

			}

			return false;
		}



		let typesScore = ['Present', 'Sanguine', 'Past', 'Phlegmatic', 'Future', 'Melancholic', 'Temporary', 'Choleric'];

		//считаем результат 	
 		let testResult = new Map();
 		testResult.set(typesScore[0], 0);
 		testResult.set(typesScore[1], 0);
 		testResult.set(typesScore[2], 0);
 		testResult.set(typesScore[3], 0);
 		testResult.set(typesScore[4], 0);
 		testResult.set(typesScore[5], 0);
 		testResult.set(typesScore[6], 0);
 		testResult.set(typesScore[7], 0);

		let counter = 1;
		for (var [key, value] of resultByIdQuestion) {

  			let scope = getScore(value); 
  			let type = typesScore[counter - 1];
  			let scopeAll = testResult.get(type) + scope
  			testResult.set(type, scopeAll);
  	
  			if (counter == 8) {
  				counter = 0;
  			}

  			counter++;
		}


		let jsonData = JSON.stringify(Object.fromEntries(testResult));
		
		let inputForJsonData = document.getElementById('json_data');
		inputForJsonData.setAttribute('value', jsonData);
		
		return true;
  	};

  	// Возвращаем балл за ответ
  	function getScore(value) {
  		let score = 0;

  		if(value == 'yes') {
			score = 2;
  		} else if (value == 'maybe') {
  			score = 1;
  		} 

  		return score;
  	}
	
});