

// $(function() {
//       $(".sortable").sortable();
//       $(".sortable").disableSelection();
//       $("#submit").click(function() {
//           var listIds = $(".sortable").sortable("toArray");
//           $("#list-ids").val(listIds);
//           $("form").submit();
//       });
//   });

// 選択肢シャッフル
const choicesLists = document.querySelectorAll('.choices-list').forEach(list => {
    const shuffle = randomIntArray(1, list.childElementCount);
    for (let i = 0; i < list.childElementCount; i++) {
        list.children[i].style.order = shuffle[i];
    }
});

function randomIntArray(start, end) {
    // 整数の配列
    let arr = [];
    if (start > end) {
        return [];
    }
    for (let i = start; i < end; i++) {
        arr.push(i);
    }

    // arrをシャッフル
    let num = arr.length;
    while (num) {
        let i = Math.floor(Math.random() * num);
        let value = arr[--num];
        arr[num] = arr[i];
        arr[i] = value;
    }

    return arr;
}

function clickfunction(questionId, clickedChoiceId, valid) {

    const validChoice = document.getElementById(`choice${questionId}_1`);
    const clickedChoice = document.getElementById(`choice${questionId}_${clickedChoiceId}`);
    const commentTitle = document.getElementById(`comment_title${questionId}`);
    const commentBox = document.getElementById(`comment_box${questionId}`);

    if (validChoice === clickedChoice) {
    validChoice.classList.add('valid-choice');

    commentTitle.innerText = '正解！';
    commentTitle.style.borderBottom = 'solid 3px #287dff';
    document.getElementById(`comment_text${questionId}`).innerText = `正解は「${validChoice.innerText}」です！`;
    commentBox.classList.remove('hide');

    } else {
        clickedChoice.classList.add('clicked-choice');
        validChoice.classList.add('valid-choice');

        commentTitle.innerText = '不正解！';
        commentTitle.style.borderBottom = 'solid 3px #ff5128';
        document.getElementById(`comment_text${questionId}`).innerText = `正解は「${validChoice.innerText}」です！`;
        commentBox.classList.remove('hide');
    }
    
    //クリック無効化
    const choices = document.querySelectorAll(`#quiz-choices${questionId} li`);
    choices.forEach((li) => {
        li.style.pointerEvents = 'none';
    });

}

