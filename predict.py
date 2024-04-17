from flask import Flask, request, jsonify
import pandas as pd
import joblib

# Create a Flask app
app = Flask(__name__)

# Define a route for testing the app
@app.route('/test', methods=['GET'])
def test():
    return jsonify({'message': 'Test successful'}), 200

# Define a route for prediction
@app.route('/predict', methods=['POST'])
def predict():
    # Load the trained model
    try:
        model = joblib.load('inventory_model.pkl')
    except Exception as e:
        return jsonify({'error': f'Failed to load model: {e}'}), 500

    # Get the request data
    req_data = request.json
    
    # Validate the request data
    if not req_data:
        return jsonify({'error': 'No data provided'}), 400
    
    # Parse input data into a DataFrame
    try:
        # Extract date and product_id from the request data
        date_str = req_data.get('date')
        product_id = req_data.get('product_id')

        print(date_str)
        print(product_id)
        
        # Convert date string to datetime object
        date = pd.to_datetime(date_str, format='%m/%d/%Y')
        
        # Extract features from the date
        month = date.month
        day = date.day
        day_of_week = date.dayofweek
        
        # Create a DataFrame with the extracted features and product_id
        new_data = pd.DataFrame({
            'month': [month],
            'day': [day],
            'day_of_week': [day_of_week],
            'product_id': [product_id]
        })
    except Exception as e:
        return jsonify({'error': f'Invalid input data format: {e}'}), 400
    
    # Make predictions using the loaded model
    predictions = model.predict(new_data)
    
    # Return the predictions
    return jsonify({'predictions': predictions.tolist()}), 200

# Run the Flask app
if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5001, debug=True)
