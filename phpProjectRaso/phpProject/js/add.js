function addSubject() {
  //alert(id);
  var xhr = new XMLHttpRequest()
  var data = new FormData()
  data.append('Name', document.getElementById('Name').value)
  data.append('ESPB', document.getElementById('ESPB').value)
  data.append('Description', document.getElementById('Description').value)

  console.log('aaaaa', data)

  // todo: upload image and move it to the correct folder
  console.log('New data: ', data)
  xhr.open('POST', '../post.php', true)
  xhr.onload = function () {
    var res = xhr.responseText
    //console.log(res);
    if (!['0', '1'].includes(res)) {
      alert(res)
    } else {
      window.location.href = '/phpProject/add.php'
    }
  }
  xhr.send(data)
}
