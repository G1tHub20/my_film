// alert("Hello");

const tagMax = 3;
const checkBoxes = document.getElementsByName('tag[]');
const textboxs = document.getElementsByName('newTag[]');
// let tagCount = 0;

// チェックボックスをカウント
checkBoxes.forEach(checkBox => {
  let tagCount = 0;
  checkBox.addEventListener('change', () => {

  checkBoxes.forEach(checkBox => {
    if(checkBox.checked) {
      tagCount++;
    }
    console.log(tagCount);
  });

  if(tagCount > tagMax) {
    alert('タグは最大3つまで');
    checkBox.checked = false;
  }

  })
});


// // テキストボックスをカウント
// textboxs.forEach(textbox => {
//   textbox.addEventListener('input', () => {

//   Array.prototype.forEach.call(textboxs, textbox => {
//       if(textbox.value.trim() !== '') {
//         tagCount++;
//       }
//   });
//   if(tagCount >= tagMax) {
//     alert('タグは最大3つまで')
//   }

//   })
// });