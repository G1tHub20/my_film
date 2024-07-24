document.addEventListener('DOMContentLoaded', function() {
  const textArea = document.getElementById('comment');
  const inputlength = document.getElementById('inputlength');

  const checkboxes = document.getElementsByName('tag[]');
  const textInputs = document.getElementsByName('newTag[]');

  /* テキストエリアの文字数カウント*/
  textArea.addEventListener('input', function() {
    let count = textArea.value.length;
    console.log(count);
    inputlength.innerHTML = count + '/1000';
    // console.log(textArea.value.length);
  });

  /* タグ数のカウント*/
  function checkInputCount(event) {
      let checkboxCount = 0;
      let textInputCount = 0;

      console.log(event.target.type);

      checkboxes.forEach(function(checkbox) {
          if (checkbox.checked) {
              checkboxCount++;
          }
      });

      textInputs.forEach(function(textInput) {
          if (textInput.value.trim() !== '') {
              textInputCount++;
          }
      });

      const totalCount = checkboxCount + textInputCount;
      if (totalCount >= 4) {
        alert('タグの指定は3つまでです。');
        // 直前のcheckboxまたはtextInputの指定を解除
        if (event.target.type === 'checkbox') { 
        event.target.checked = false; 
        } else if (event.target.type === 'text') {
        event.target.value = ''; 
       }
      }
  }

  checkboxes.forEach(function(checkbox) {
      checkbox.addEventListener('change', checkInputCount);
  });

  textInputs.forEach(function(textInput) {
      textInput.addEventListener('input', checkInputCount);
  });
});