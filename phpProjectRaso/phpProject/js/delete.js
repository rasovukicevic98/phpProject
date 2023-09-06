function deleteSubject(id) {
  var xhr = new XMLHttpRequest()
  xhr.open('DELETE', '../../phpProject/actionDelete.php?id=' + id, true)
  xhr.onload = function () {
    var res = xhr.responseText
    console.log(res)
    if (res) {
      var block = document.getElementById('subject' + id)
      block.parentNode.removeChild(block)
    } else {
      alert('Some error occurred res ', res)
    }
  }
  xhr.send()
}
