# Import necessary libraries
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.ensemble import RandomForestRegressor
from sklearn.metrics import mean_squared_error
#from sklearn.externals import joblib
import joblib

# Load historical sales data (assuming it's in a CSV file)
data = pd.read_csv('sales_data.csv')

# Preprocess data and extract relevant features
# (Assume 'date', 'product_id', 'sales_quantity' columns in the dataset)
data['date'] = pd.to_datetime(data['date'])
data['month'] = data['date'].dt.month
data['day'] = data['date'].dt.day
data['day_of_week'] = data['date'].dt.dayofweek

# Split data into training and testing sets
X = data[['month', 'day', 'day_of_week', 'product_id']]
y = data['sales_quantity']
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

# Train a simple machine learning model (Random Forest in this example)
model = RandomForestRegressor(n_estimators=100, random_state=42)
model.fit(X_train, y_train)

# Make predictions on the test set
predictions = model.predict(X_test)


# Save the trained model for future use
joblib.dump(model, 'inventory_model.pkl')

print("succesfully trained  And Model created : inventory_model.pkl ")