Hasil Pencarian
{% for v in search %}
{% if loop.first %}
<table class="table table-hover">
    <thead>
      <tr>
        <th>Username</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Edit</th>
        <th>Del</th>
      </tr>
    </thead>
    {% endif %}
    <tbody>
      <tr>
        <td>{{v.username}}</td>
        <td>{{v.nama}}</td>
        <td>{{v.email}}</td>
        <td><a href="user/edit/{{v.id}}">edit</a> </td>
        <td><a href="user/del/{{v.id}}">del</a></td>
      </tr>
   {% if loop.last %}
    </tbody>
  </table>
  {% endif %}
{% else %}
    No data
{% endfor %}
