import pandas as pd
import warnings

warnings.filterwarnings('ignore')

data = pd.read_csv('food.csv', encoding='cp949')

pd.set_option('display.max_rows', None)

address = data[['诀家林家']]
text = '"'
new_string = text.lstrip('\"')

for x in range(len(text)):
    address = address.replace(text[x], "")

address = address.to_csv('诀家林家.txt', index=False, header=False, encoding='cp949')