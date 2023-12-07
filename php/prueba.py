import requests
import json

str = '{"csrftoken": "uckeldfD48L3EmbyfvqAPZkwcHJgZ3Pr", "mid": "ZXG30wALAAGRiBz6ythInr7oROrP", "ds_user_id": "7225109200", "ig_did": "E9FE5961-888D-49F8-9B7C-79436CF1E57B", "sessionid": "7225109200%3AUzLQGhCqAuTjbG%3A18%3AAYe76jlwxK-Jb7y__o36ISd_a6hngEox_N_qJkpiog"}'

res = json.loads(str)
print(type(res))
# headers = {}
# for x in res.items():
#     headers[x[0]]= x[1]

# print (type(headers))

response = requests.post('https://www.instagram.com', headers=res)
print (response.text)