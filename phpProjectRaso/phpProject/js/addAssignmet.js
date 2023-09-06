function addAssignmentToSubject(id) {
  alert(id)
  id = $_REQUEST['id']
  alert('empty')
  console.log('New dataaaaaa: ', id)
  var xhr = new XMLHttpRequest()
  var data = new FormData()
  data.append('Name', document.getElementById('NameAssignment').value)
  data.append(
    'Description',
    document.getElementById('DescriptionAssignment').value,
  )
  alert('Some error occurred res ', data)
  console.log('New dataaaaaa: ', data)
  xhr.open('POST', '/phpProject/postForAssignment.php?id=' + id, true)
  xhr.onload = function () {
    console.log('New dataaaaaa: ', data)
    var res = xhr.responseText
    console.log(res)
    if (!['0', '1'].includes(res)) {
      alert(res)
    } else {
      window.location.href = '/phpProject/read.php?id=' + id
    }
  }
  xhr.send(data)
}
