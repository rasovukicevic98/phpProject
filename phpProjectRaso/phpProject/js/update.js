function updateSubject(id) {
  var xhr = new XMLHttpRequest()
  var data = new FormData()
  data.append('Name', document.getElementById('Name').value)
  data.append('ESPB', document.getElementById('ESPB').value)
  data.append('Description', document.getElementById('Description').value)

  xhr.open('POST', '/phpProject/put.php?id=' + id, true)
  xhr.onload = function () {
    var res = xhr.responseText
    if (!['0', '1'].includes(res)) {
      alert(res)
    } else {
      window.location.href = '/phpProject/read.php?id=' + id
    }
  }
  xhr.send(data)
}
