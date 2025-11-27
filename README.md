# myCAO Website - WordPress on Railway

A WordPress website for myCAO, configured for deployment on Railway.

## 🚀 Quick Deploy to Railway

### Step 1: Create a Railway Account
1. Go to [railway.app](https://railway.app)
2. Sign up or log in with GitHub

### Step 2: Deploy WordPress
1. Click **"New Project"** in Railway dashboard
2. Select **"Deploy from GitHub repo"**
3. Connect this repository

### Step 3: Add MySQL Database
1. In your Railway project, click **"+ New"**
2. Select **"Database"** → **"MySQL"**
3. Railway will automatically create the database

### Step 4: Configure Environment Variables
Railway will auto-detect most variables. Add these if needed:

| Variable | Description |
|----------|-------------|
| `MYSQL_HOST` | `${{MySQL.MYSQL_HOST}}` (auto-set) |
| `MYSQL_DATABASE` | `${{MySQL.MYSQL_DATABASE}}` (auto-set) |
| `MYSQL_USER` | `${{MySQL.MYSQL_USER}}` (auto-set) |
| `MYSQL_PASSWORD` | `${{MySQL.MYSQL_PASSWORD}}` (auto-set) |
| `WORDPRESS_DEBUG` | `false` |

### Step 5: Generate Domain
1. Go to your WordPress service in Railway
2. Click **"Settings"** → **"Networking"**
3. Click **"Generate Domain"** to get your public URL

## 🖥️ Local Development

### Prerequisites
- Docker & Docker Compose installed

### Run Locally
```bash
# Start WordPress and MySQL
docker-compose up -d

# Access WordPress at http://localhost:8080

# Stop containers
docker-compose down

# Stop and remove volumes (reset data)
docker-compose down -v
```

## 📁 Project Structure

```
myCAO_website/
├── Dockerfile          # WordPress Docker configuration
├── docker-compose.yml  # Local development setup
├── railway.json        # Railway deployment config
├── .env.example        # Environment variables template
├── .gitignore          # Git ignore rules
└── README.md           # This file
```

## 🔧 Customization

### Adding Themes
Place custom themes in `/wp-content/themes/`

### Adding Plugins
Place custom plugins in `/wp-content/plugins/`

### Custom wp-config.php
Create a `wp-config-custom.php` file for additional WordPress configurations.

## 🔒 Security Notes

- Never commit `.env` files with real credentials
- Use strong passwords for WordPress admin
- Keep WordPress and plugins updated
- Enable HTTPS in production (Railway provides free SSL)

## 📞 Support

For issues with:
- **Railway deployment**: Check [Railway docs](https://docs.railway.app)
- **WordPress**: Check [WordPress docs](https://wordpress.org/documentation/)

---

Made with ❤️ for myCAO
